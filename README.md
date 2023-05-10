# symfony-starter-app
Basic setup of symfony web app

## Get started

This project uses docker and Visual Studio Code Dev Containers.
To get started install docker and run the provided container definition.

### Install Docker
For infos on how to install docker, see https://www.docker.com/products/docker-desktop/

### Start Dev Container
For infos on how to start the dev container, see https://code.visualstudio.com/docs/devcontainers/containers

## Features of this Dev Container

### Tasks

To run a task press `crtl` + `shift` + `P`
Also see https://code.visualstudio.com/docs/editor/tasks

### Dependencies

Run task `install dependencies`

### Dev server

Run task `dev-server`
If you have not yet installed your projects dependencies, make sure to to so first.

### Static code analysis
This project uses a static analysis tool called Psalm.
Check out https://github.com/vimeo/psalm for more information on it.

Run task `analyse code`

### Unit Testing
This project is also configured to support automated testing out of the box using PHPUnit.
See https://phpunit.de/ for more information. Try to write your own tests!


To run your tests use this task.

Run task `run tests`

Checkout the code coverage under http://localhost:8000/bundles/phpunit/coverage/

Alternatively use can also use the debugger to step through a particular unit test.
Just change the profile to 'run tests in debug mode'.
If you are testing web views, make sure to run the task `build encore` first.
