<?php
namespace Drupal\screamsheets\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\ai\OperationType\Chat\ChatInput;
use Drupal\ai\OperationType\Chat\ChatMessage;


class SheetForm extends FormBase {

    /**
     * {@inheritdoc}
     */
    public function getFormId() {
        return 'sheet_form';
    }

    /**
     * {@inheritdoc}
     */
    public function buildForm(array $form, FormStateInterface $form_state) {

        $article_type = 'article_type'; 
        $terms = \Drupal::entityTypeManager()->getStorage('taxonomy_term')->loadTree($article_type);

        $category_options = [];
        foreach ($terms as $term) {
            $category_options[$term->tid] = $term->name;
        }

        $headlineThemeColumnOne = [
            1 => '(Pick a Corp)',
            2 => 'Senator',
            3 => 'President',
            4 => 'Corporation(s)',
            5 => 'City Council',
            6 => 'Cyberpsycho',
            7 => 'Killer',
            8 => 'Slayer',
            9 => 'Tragic',
            10 => 'Investigators'
        ];

        $headlineThemeColumnTwo = [
            1 => 'Offers',
            2 => 'Threatens',
            3 => 'Compromises',
            4 => 'Murders',
            5 => 'Killed',
            6 => 'Dies',
            7 => 'Praises',
            8 => 'Announces',
            9 => 'Reveals',
            10 => 'Continues'
        ];

        $headlineThemeColumnThree = [
            1 => 'Corporations',
            2 => 'City',
            3 => 'Compromise',
            4 => 'Warning',
            5 => 'Plan',
            6 => 'Scandal',
            7 => 'Woman',
            8 => 'Man',
            9 => 'Accident',
            10 => 'Hope'
        ];

        $form['category'] = [
            '#type' => 'select',
            '#title' => $this->t('Article category'),
            '#required' => TRUE,
            '#options' => $category_options,
            // '#options' => [
            //     1 => 'International',
            //     2 => 'National',
            //     3 => 'State',
            //     4 => 'Local',
            //     5 => 'Financial',
            //     6 => 'Gossip',
            // ]
        ];

        $form['column_1'] = [
            '#type' => 'select',
            '#title' => $this->t('Headline keyword 1'),
            '#required' => TRUE,
            '#options' => $headlineThemeColumnOne
        ];

        $form['column_2'] = [
            '#type' => 'select',
            '#title' => $this->t('Headline keyword 2'),
            '#required' => TRUE,
            '#options' => $headlineThemeColumnTwo
        ];

        $form['column_3'] = [
            '#type' => 'select',
            '#title' => $this->t('Headline keyword 3'),
            '#required' => TRUE,
            '#options' => $headlineThemeColumnThree
        ];

        $form['prompt'] = [
            '#type' => 'textarea',
            '#title' => $this->t('Your prompt'),
            '#required' => TRUE,
        ];

        $form['actions']['submit'] = [
            '#type' => 'submit',
            '#value' => $this->t('Submit'),
        ];

        return $form;
    }

    /**
     * {@inheritdoc}
     */
    public function validateForm(array &$form, FormStateInterface $form_state) {
        // Implement custom validation logic here.
    }

    /**
     * {@inheritdoc}
     */
    public function submitForm(array &$form, FormStateInterface $form_state) {
        // Implement submission handling logic here.
        // Find the default selected LLM
        $sets = \Drupal::service('ai.provider')->getDefaultProviderForOperationType('chat');

        $service = \Drupal::service('ai.provider');
        $provider = $service->createInstance($sets['provider_id']);

        // Building the prompt
        $details = $form_state->getValue('prompt');
        $category = $form_state->getValue('category');
        $keywordOne = $form_state->getValue('column_1');
        $keywordTwo = $form_state->getValue('column_2');
        $keywordThree = $form_state->getValue('column_3');

        $prompt = 'Please write a news Article set in the fictitious world of Cyberpunk Red in 2045 of the following category: ' . $category . 'using the following keywords: ' . $keywordOne . ', ' . $keywordTwo . ', ' . $keywordThree;
        
        $messages = new ChatInput([
            new ChatMessage('system', 'You are a journalist in the world of Cyberpunk in 2045.'),
            new ChatMessage('user', $prompt),
        ]);
        $message = $provider->chat($messages, $sets['model_id'])->getNormalized();
        $this->messenger()->addStatus($this->t('Prompt received'));

        \Drupal::logger('screamsheets')->warning($message->getText());

        return $message->getText();
    }
}