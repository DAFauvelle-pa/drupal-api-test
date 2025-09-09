## #ddev-generated
## You can copy this Dockerfile.example to Dockerfile to add configuration
## or packages or anything else to your webimage
## These additions will be appended last to DDEV's own Dockerfile
# RUN echo "Built on $(date)" > /build-date.txt
# web-build/Dockerfile
ARG BASE_IMAGE
FROM $BASE_IMAGE

RUN apt-get update && apt-get install -y curl && rm -rf /var/lib/apt/lists/*