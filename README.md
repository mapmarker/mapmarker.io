# mapmarker.io

Generate complex map markers on the fly.

MapMarker.io is a straight-forward API that generates complex map markers on the fly. Developers can effortlessly create interactive applications centered around maps.

## Development

### Requirements


| Requirement   | Version   |
|---------------|-----------|
| PHP           | `^8.0.2`  |
| Node          | `14`      |

### Installing Dependencies

```bash
composer install
nvm use
yarn
cp ./.env.example ./.env
```

### Development Environment

Launch the docker-based dev environment using the following command

```bash
yarn sail up -d
```

### Compiling Assets

To automatically compile assets while developing, simply run the watch command. This will ensure that css is re-compiled automatically when you make changes to the templates or components of this project.

```bash
yarn watch
```

### Committing Changes

This project uses commitizen to keep commits organized and to automate version tagging. To commit changes you made, run the following commands and follow the prompots:

```bash
git add .
yarn commit
```

