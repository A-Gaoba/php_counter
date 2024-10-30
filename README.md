# PHP Counter Application

A basic counter application using PHP sessions to keep track of counts. Users can increase, decrease, or reset the counter.

## Features

- **Increase**: Adds 1 to the counter.
- **Decrease**: Subtracts 1 from the counter.
- **Reset**: Sets the counter to zero.
- **Session Storage**: Retains the counter value across page reloads.
<p align="left">
  <img src="https://github.com/user-attachments/assets/c521d557-e005-49d0-b120-1273e573664c" alt="Counter Screenshot" width="400"/>
</p>

## Code Overview

1. **Session Handling**: The counter value is stored in a PHP session, initialized at zero.
2. **Form Submission**: Each button (`increase`, `decrease`, `reset`) updates the counter based on user actions.
3. **Redirection**: The script refreshes the page after each update to avoid form resubmission.

