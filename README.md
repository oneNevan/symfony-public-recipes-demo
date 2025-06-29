1. Create public repo for public symfony recipes
2. Configure repository to run GitHub Action Workflows
   1. Settings > Actions > General > Workflow permissions
      1. Read and write permissions
      2. Allow GitHub Actions to create and approve pull requests
   2. Create fine-grained token for this repository with permission
      1. Actions
      2. Contents
      3. Pull Requests
   3. Save token to repository `secrets.RECIPES_TOKEN`
3. Create index.json ([example](https://symfony.com/doc/current/setup/flex_private_recipes.html#github-1)) in `flex/main` branch
4. Add workflows to main branch, commit and push changes
5. Add your first recipe (see examples in [symfony/recipes](https://github.com/symfony/recipes))
6. Check actions to confirm flex/main is automatically updated after push to main
