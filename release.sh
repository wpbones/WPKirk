#!/bin/bash

# Read the current version from the main files
composer_version=$(grep -o '"version": "[^"]*' composer.json | cut -d '"' -f 4)
index_version=$(grep -o 'Version: [0-9.]*' index.php | awk '{print $2}')
package_version=$(grep -o '"version": "[^"]*' package.json | cut -d '"' -f 4)
readme_version=$(grep -o 'Stable tag: [0-9.]*' readme.txt | awk '{print $3}')

# Read from vendor/wpbones
wpbones_composer_version=$(grep -o '"version": "[^"]*' vendor/wpbones/wpbones/composer.json | cut -d '"' -f 4)


echo "Current composer version: $composer_version"
echo "Current index version: $index_version"
echo "Current package version: $package_version"
echo "Current readme version: $readme_version"

echo "Current WPBones composer version: $wpbones_composer_version"