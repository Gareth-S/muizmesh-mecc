# passport-twitch

[Passport](http://passportjs.org/) strategy for authenticating with [Twitch](http://www.twitch.tv/) using the OAuth 2.0 API.

This module lets you authenticate using Twitch in your Node.js applications.
By plugging into Passport, Twitch authentication can be easily and
unobtrusively integrated into any application or framework that supports
[Connect](http://www.senchalabs.org/connect/)-style middleware, including
[Express](http://expressjs.com/).

## Install

```bash
$ npm install passport-twitch
```

## Usage
#### Configure Strategy

The Twitch OAuth 2.0 authentication strategy authenticates users using a Twitch account and OAuth 2.0 tokens. The strategy requires a `verify` callback, which accepts these credentials and calls `done` providing a user, as well as `options` specifiying a client ID, client secret, and callback URL.
```javascript
passport.use(new TwitchStrategy({
    clientID: TWITCH_CLIENT_ID,
    clientSecret: TWITCH_CLIENT_SECRET,
    callbackURL: 'http://localhost:3000/auth/twitch/callback',
    scope: 'user:read:email analytics:read:games'
  },
  function(accessToken, refreshToken, profile, cb) {
    User.findOrCreate({ twitchId: profile.id }, function (err, user) {
      return cb(err, user);
    });
  }
));
```

#### Authentication Requests

Use `passport.authenticate()`, and specify the `twitch` strategy to authenticate requests.

For example, as a route middleware in an Express application:
```javascript
app.get('/auth/twitch', passport.authenticate('twitch'));
app.get('/auth/twitch/callback', passport.authenticate('twitch', { failiureRedirect: '/login' }), function(req, res) {
  res.redirect('/');
});
```

Optionally, the `forceVerify` option can be set to `true` to indicate that the user should be re-prompted for authorization:
```javascript
app.get('/auth/twitch', passport.authenticate('twitch', { forceVerify : true }));
```

## Example

Soon...

## License

MIT License

Copyright (c) 2018 Matthew Gaunt

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.
