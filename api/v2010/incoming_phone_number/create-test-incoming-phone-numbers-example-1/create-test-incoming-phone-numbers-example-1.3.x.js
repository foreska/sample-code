// Download the helper library from https://www.twilio.com/docs/node/install
// Your Account Sid and Auth Token from twilio.com/console
const accountSid = 'AC758e4fa2554b0dbfd9337936383f42f9';
const authToken = 'your_auth_token';
const client = require('twilio')(accountSid, authToken);

client.incomingPhoneNumbers
      .create({
         phoneNumber: '+18738002038',
         voiceUrl: 'http://twilio.com/docs/voice.xml'
       })
      .then(incoming_phone_number => console.log(incoming_phone_number.sid))
      .done();
