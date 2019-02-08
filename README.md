# Kirby Modeler
This plugin loads the default page model for pages that have no model. This way some standard functions can easily applied to all pages in the site.

## Installation

### Composer

If you are using Composer, you can install the plugin with `composer require reprovinci/kirby-modeler`.

### Download

Download and extract the files from this branch, rename the folder to `kirby-modeler` and place it into the `site/plugins/` folder of your Kirby 3 installation.

## Usage
Create a default model in `site/models/default.php`. Pages without a model will automatically extend that model.

🤓 Happy coding!