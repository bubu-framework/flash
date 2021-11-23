# Flash

## Flash message property

- General style:
  - margin & padding: 10px
  - border-radius: 75px
  - font-weight: 1000
  - font-size: 18px
  - display: grid

- Valid
  - text color: `#3C763D`
  - background color: `#DFFFD8`
  - icon: `&#10003`

- Info
  - text color: `#31708F`
  - background color: `#D9EDF7`
  - icon: `&#128712`

- Alert
  - text color: `#FF5D00`
  - background color: `#FFB149`
  - icon: `&#9888`

- Error
  - text color: `#FF3331`
  - background color: `#FFABAB`
  - icon: `&#10754`

## Create flash message

- ### Create flash message with default property

  `Flash::type($message);`

  With:
  - type -> in ['valid', 'info', 'alert', 'error']
  - message -> (string)

- ### Create flash message without default property but with general style

  `Flash::other($message, $colorText, $backgroundColor, $iconCode)`

  With:
  - message -> (string) message to show
  - colorText -> (string) color of text (all color type supported by css suported)
  - colorBackgroud -> (string) same of colorText but for background
  - iconCode -> Code for icon (prefer hex code)

## Generate flash message

- Generate message with css style: `Flash::generate();`
- Generate message without default style: `Flash::rawGenerate()`

> Note: for the 2 methods, a class `flash` is added, but, for `rawGenerate`, a second class named by `flash-type` (with type, the type of message (valid, info, alert, error, other)) is added.
