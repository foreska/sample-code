// Install the C# / .NET helper library from twilio.com/docs/csharp/install

using System;
using Twilio;
using Twilio.Converters;
using Twilio.Rest.Video.V1;


class Program 
{
    static void Main(string[] args)
    {
        // Find your Account Sid and Token at twilio.com/console
        const string accountSid = "ACXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX";
        const string authToken = "your_auth_token";

        TwilioClient.Init(accountSid, authToken);

        var room = RoomResource.Create(
            enableTurn: true,
            statusCallback: new Uri("http://example.org"),
            type: RoomResource.RoomTypeEnum.PeerToPeer,
            uniqueName: "DailyStandup"
        );

        Console.WriteLine(room.Sid);
    }
}
