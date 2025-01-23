#!/bin/bash

# Define variables
REPO_URL="https://github.com/sofucoder/DinaSphare-Web.git"
BRANCH="main"  # Change to your branch if different

# Initialize git if not already initialized
if [ ! -d ".git" ]; then
    git init
    git remote add origin $REPO_URL
fi

# Add all files and folders
git add .

# Commit the changes with a message
git commit -m "Updated project files"

# Push to GitHub
git push -u origin $BRANCH

echo "Project files have been uploaded to GitHub."

