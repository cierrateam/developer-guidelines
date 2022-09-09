---
title: Setup statamic
description: When we create a new website with statamic, that are our steps to go.
extends: _layouts.documentation
section: content
---

# Setup statamic {#setup-satamic}

When we create a new website with statamic, this is our way to go. We cover in this guide the basetemplate and all other steps.

## Create the repository

A new repository can be created via the statamic template repository here: [Statamic template](https://github.com/cierrateam/statamic-template)

## Create the root files

Now we wanna create the base project and the root files for the project. To do so we enter the following command in our terminal, replace PROJECT with the name of the project (full domain of the project!) and make sure the statamic CLI is installed (https://statamic.dev/installing/local) :

```bash
statamic new PROJECT studio1902/statamic-peak
```

After this, the kit "Peak" should be installed as well as Statamic itself. For further infos check the starter kit and the official statamic docs.
