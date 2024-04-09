#!/bin/bash

# Read the current version from the main files
index_version=$(grep -o 'Version: [0-9.]*' index.php | awk '{print $2}')
package_version=$(grep -o '"version": "[^"]*' package.json | cut -d '"' -f 4)
readme_version=$(grep -o 'Stable tag: [0-9.]*' readme.txt | awk '{print $3}')

# Read from bones
phpbones_version=$(grep -o "define('WPBONES_COMMAND_LINE_VERSION', '[0-9.]*" bones | awk -F"'" '{print $4}')
vendor_phpbones_version=$(grep -o "define('WPBONES_COMMAND_LINE_VERSION', '[0-9.]*" vendor/wpbones/wpbones/src/Console/bin/bones | awk -F"'" '{print $4}')

echo "Current index version: $index_version"
echo "Current package version: $package_version"
echo "Current readme version: $readme_version"

echo "Current 'php bones' version: $phpbones_version"
echo "Current 'vendor/wpbones/wpbones/src/Console/bin/bones' version: $vendor_phpbones_version"
echo ""

# Ask the user to input the version
read -p "Enter the version (current version is $phpbones_version): " version

# Check if the version input is empty and calculate the next version (rc)
if [ -z "$version" ]; then
    if [[ $phpbones_version == *-rc* ]]; then
        main_version=$(echo "$phpbones_version" | awk -F '-rc' '{print $1}')
        current_rc=$(echo "$phpbones_version" | awk -F '-rc.' '{print $2}')
        incremental=$((current_rc + 1))
        version="$main_version-rc.$incremental"
    else
        version=$(echo "$phpbones_version" | awk -F. '{$NF = $NF + 1;} 1' OFS=. | sed 's/ /./')-rc.0
    fi

    read -p "New version calculated: $version. Is this version correct? (y/n): " confirm

    if [ "$confirm" != "y" ]; then
        echo "Exiting script."
        exit 0
    fi
fi

# Update the version in the main files
# index.php
sed -i '' -e "s/\* Version: .*/* Version: $version/g" index.php

# package.json
sed -i '' -e "s/\"version\": \".*\"/\"version\": \"$version\"/" package.json

# readme.txt
sed -i '' -e "s/Stable tag: .*/Stable tag: $version/g" readme.txt

# bones
sed -i '' -e "s/define('WPBONES_COMMAND_LINE_VERSION', '.*');/define('WPBONES_COMMAND_LINE_VERSION', '$version');/g" bones

# copy the bones command in vendor/wpbones/wpbones/src/Console/bin/bones
cp bones vendor/wpbones/wpbones/src/Console/bin/bones

# Ask if we have to sync the vendor/wpbones/wpbones/ folder with ../WPBones folder
read -p "Do you want to sync the vendor/wpbones/wpbones/ folder with ../WPBones folder? (y/n): " sync

if [ "$sync" == "y" ]; then
    cp -r vendor/wpbones/wpbones/* ../WPBones/
fi
