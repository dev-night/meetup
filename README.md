# Meetup redirecter

This application will redirect visitors to the correct meetup page automatically by querying the meetup.com API.

It is the source of the following URLs:

- [meetup.dev-night.io](https://meetup.dev-night.io)
- [m.dev-night.io](https://m.dev-night.io)

It is hosted with [Now](https://zeit.co/now).

## Develop

### Requirements

You need a local `.env` file. To create it use the `.env-example` file as a starting point.

### Starting the app

You can start a development server with:

```bash
make
```

After that you can visit `http://localhost:8888` to test it.

## Deployment

The [deployment happens automatically](https://zeit.co/blog/now-for-github) if you push to master. This is done through [Now](https://zeit.co/now).

### Manually

To deploy manually use this command:

```bash
now && now alias
```

## Todo

- [ ] Create and use an Bot Account for Meetup.com instead of personal account
- [ ] Add chaching to reduce API calls
- [ ] Extract API calls out to offer a centralized service
