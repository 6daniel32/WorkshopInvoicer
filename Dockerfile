FROM php:8.0.0-apache
# Prevents errors from showing as well as confirmation dialogs when installing dependencies
ARG DEBIAN_FRONTEND=noninteractive
RUN docker-php-ext-install mysqli
RUN apt-get update \
    # library for reading, creating, and modifying zip archives
    && apt-get install -y libzip-dev \
    # adding additional features to the previous package
    && apt-get install -y zlib1g-dev \
    # the directory which is used for storing information for each package resource specified in your system's sources
    && rm -rf /var/lib/apt/lists/* \
    # another library for reading, creating, and modifying zip archives
    && docker-php-ext-install zip
# enabling mod_rewrite in apache 
# (module which uses a rule-based rewriting engine, based on a PCRE regular-expression parser, to rewrite requested URLs on the fly)
# basically what you do in htaccess.
RUN a2enmod rewrite