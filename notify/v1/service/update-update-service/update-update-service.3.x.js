// Download the helper library from https://www.twilio.com/docs/node/install
// Your Account Sid and Auth Token from twilio.com/console
const accountSid = 'ACXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX';
const authToken = 'your_auth_token';
const client = require('twilio')(accountSid, authToken);

client.notify.services('ISXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX')
             .update({
                facebookMessengerPageId: 'your_page_id',
                friendlyName: 'Another Awesome Service',
                messagingServiceSid: 'your_twilio_messaging_service_sid'
              })
             .then(service => console.log(service.sid))
             .done();
