## [1.11.2](https://github.com/mapmarker/mapmarker.io/compare/1.11.1...1.11.2) (2022-06-22)


### Bug Fixes

* **docker:** changed switches for docker-php-ext-configure gd ([74bec2d](https://github.com/mapmarker/mapmarker.io/commit/74bec2d1aa54865334e62e0ba5479bf1cb9f51b8))
* **docker:** use --enable-gd instead of --with-gd ([08b516c](https://github.com/mapmarker/mapmarker.io/commit/08b516c3fe40946f6d287e93ae09ca02599c04c2))

## [1.11.1](https://github.com/mapmarker/mapmarker.io/compare/1.11.0...1.11.1) (2022-06-22)


### Bug Fixes

* **docker:** changed attempt to install gd ([706d961](https://github.com/mapmarker/mapmarker.io/commit/706d9615bfd9e7cb00e06d4a23a03db4cdbe2c17))

# [1.11.0](https://github.com/mapmarker/mapmarker.io/compare/1.10.0...1.11.0) (2022-06-22)


### Features

* **laravel vapor docker:** switched deployment to docker-based with gd extension ([b9efafd](https://github.com/mapmarker/mapmarker.io/commit/b9efafd0655ade5c497112fca126fdb5c3760ac5))

# [1.10.0](https://github.com/mapmarker/mapmarker.io/compare/1.9.0...1.10.0) (2022-06-22)


### Features

* **fontawesome v5 pin controller:** added pin controller ([2fa4646](https://github.com/mapmarker/mapmarker.io/commit/2fa4646352e803a79e0230b34567108053498c78))
* **pincontroller:** calibrated default offset to center text ([148568f](https://github.com/mapmarker/mapmarker.io/commit/148568f973a78447c7b105201266c3bee5b4c1fc))

# [1.9.0](https://github.com/mapmarker/mapmarker.io/compare/1.8.0...1.9.0) (2022-06-22)


### Features

* **app version:** added version entry to config resolved from composer.json ([1543cad](https://github.com/mapmarker/mapmarker.io/commit/1543cad4c1826505a71ffbe87e3fb3215d98c24c))
* **lawnding-page:** show only logo and current version on homepage ([ee48d66](https://github.com/mapmarker/mapmarker.io/commit/ee48d66803a9002393009b61b0f59397960c0ce4))

# [1.8.0](https://github.com/mapmarker/mapmarker.io/compare/1.7.1...1.8.0) (2022-06-21)


### Features

* **laravel vapor:** configured staging / production envs ([6d36a2d](https://github.com/mapmarker/mapmarker.io/commit/6d36a2d3de8bb1272bb6cdd3a532cb736e5c7315))
* **release:** automatically open release prs with github workflow ([4985f6d](https://github.com/mapmarker/mapmarker.io/commit/4985f6de782c9990847905e3b1df3810b8ad5c80))

## [1.7.1](https://github.com/mapmarker/mapmarker.io/compare/1.7.0...1.7.1) (2022-06-21)


### Bug Fixes

* **versioning:** include composer.json in semantic-release/git config ([d3f08aa](https://github.com/mapmarker/mapmarker.io/commit/d3f08aa63effcc45fec28a9221c182c286e404af))

# [1.7.0](https://github.com/mapmarker/mapmarker.io/compare/1.6.0...1.7.0) (2022-06-21)


### Features

* **versioning:** update composer.json version as part of release ([07e6dec](https://github.com/mapmarker/mapmarker.io/commit/07e6decc39cc1f8c4e0cdd560b201f41fdea44c5))

# [1.6.0](https://github.com/mapmarker/mapmarker.io/compare/1.5.0...1.6.0) (2022-06-21)


### Features

* **circleci:** run tests against tagged versions ([c594960](https://github.com/mapmarker/mapmarker.io/commit/c59496070249d59bf3ef2ce0f70d1c952486cd0b))

# [1.5.0](https://github.com/mapmarker/mapmarker.io/compare/1.4.0...1.5.0) (2022-06-21)


### Features

* **versioning:** configured semantic-release/npm settings ([1a74cc9](https://github.com/mapmarker/mapmarker.io/commit/1a74cc93d75d4dced36df1cda2b1dc6dc3512a45))

# [1.4.0](https://github.com/mapmarker/mapmarker.io/compare/1.3.1...1.4.0) (2022-06-21)


### Features

* **versioning:** add plugin to set package.json version ([65379f3](https://github.com/mapmarker/mapmarker.io/commit/65379f3d8660e972369354bb6a73d46b115905d5))

## [1.3.1](https://github.com/mapmarker/mapmarker.io/compare/1.3.0...1.3.1) (2022-06-21)


### Bug Fixes

* **circleci:** remove deployment notification ([c10053a](https://github.com/mapmarker/mapmarker.io/commit/c10053a04027d77c0a268f885198f1150732da68))
* **versioning:** attempt to enable tagging on master with pr open ([768a14a](https://github.com/mapmarker/mapmarker.io/commit/768a14a50dad3181d0688f9dc7f2cff7828f5434))

# [1.3.0](https://github.com/mapmarker/mapmarker.io/compare/1.2.0...1.3.0) (2022-06-21)


### Bug Fixes

* **merge-conflicts:** resolved merge conflicts from master branch ([f65e615](https://github.com/mapmarker/mapmarker.io/commit/f65e6157775f1fb73f3bd1e7ac4befe28257d492))


### Features

* **laravel-vapor:** configured basic envs ([fd9c7af](https://github.com/mapmarker/mapmarker.io/commit/fd9c7af08431edefa519e92c705e57b7b3119a4a))
* **laravel-vapor:** installed cli into project ([359ee63](https://github.com/mapmarker/mapmarker.io/commit/359ee635f1906d69c2f24557bf2390cd879b88fc))

# [1.2.0](https://github.com/mapmarker/mapmarker.io/compare/1.1.0...1.2.0) (2022-06-21)


### Features

* **circleci:** changed job filters for version tags ([17fa6fe](https://github.com/mapmarker/mapmarker.io/commit/17fa6fe2dfd5a0b2b7135c0f80f16568d9a69c66))

# [1.1.0](https://github.com/mapmarker/mapmarker.io/compare/v1.0.1...1.1.0) (2022-06-21)


### Bug Fixes

* **versioning:** installed @semantic-release/git ([6b0743f](https://github.com/mapmarker/mapmarker.io/commit/6b0743f6a9cee4c9647bc71a0173f98f20ec21e5))


### Features

* **versioning:** add main to versioning branch ([2c4a507](https://github.com/mapmarker/mapmarker.io/commit/2c4a507ecbac3bbd360be97e3bd2b780ed6b2155))
* **versioning:** add semantic-release configuration ([c7a9ccd](https://github.com/mapmarker/mapmarker.io/commit/c7a9ccde64017d15aea861d6cb8d521f7cf13f0e))

# Changelog

All notable changes to this project will be documented in this file. See [standard-version](https://github.com/conventional-changelog/standard-version) for commit guidelines.

### 0.0.1 (2022-06-21)