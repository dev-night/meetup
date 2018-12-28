# Meetup redirecter

This application will redirect visitors to the correct meetup page automatically by querying the meetup.com API.

It is the source of the following URLs:

- [meetup.dev-night.io](https://meetup.dev-night.io)
- [m.dev-night.io](https://m.dev-night.io)

It is hosted with [Now](https://zeit.co/now).

## Develop

### Requirements

You need a local `.env` file. To create it use the `.env-example` file as a starting point.
You will need to retrieve your meetup.com API key. You can do that [here](https://secure.meetup.com/de-DE/meetup_api/key/). (You have to be logged in)

### Starting the app

You can start a development server with:

```bash
make
```

After that you can visit `http://localhost:8888` to test it.

To reload code changes just `CTRL+C` your current session and use `make run`.

## Deployment

The [deployment happens automatically](https://zeit.co/blog/now-for-github) if you push to master. This is done through [Now](https://zeit.co/now).

The secret (`meetup_api_key`) was added via the command line and is avaiable as an environment variable. <br />
If you want to update the secret use the following command:

```bash
now secrets rm meetup_api_key
now secrets add meetup_api_key "<new Meetup.com API key>"
```

You can list all secrets with `now secrets ls`.

Please make sure you are doing it in the context of the /dev/night team on Now.
To switch to the team use the `now switch` command and select the team.

### Manually

To deploy manually use this command:

```bash
now && now alias
```

## Todo

- [ ] Create and use an Bot Account for Meetup.com instead of personal account
- [ ] Add chaching to reduce API calls
- [ ] Extract API calls out to offer a centralized service
