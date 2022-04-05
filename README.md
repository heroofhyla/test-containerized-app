This is a simple containerized PHP app for testing my Docker setup.

Between this project and the docker environment itself
(https://github.com/heroofhyla/docker-dev-env) I'm trying to solve the
following problems:

- Development should be painless -- it shouldn't feel any more onerous to work
  in this setup than in a plain LAMP stack like I'm used to.
- Per-environment config should be possible without storing the config for each
  environment in the repository.
- Secrets should be secure.

