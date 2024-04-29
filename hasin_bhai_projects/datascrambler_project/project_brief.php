<?php
/*


✅Features of the Project:

👉Encoding Data:
Users can input data into a textarea.
They can provide a key for encoding the data.
The provided data is scrambled based on the key using the scrambleData() function.

👉Decoding Data:
Users can decode previously encoded data.
They need to provide the encoded data and the key used for encoding.
The encoded data is decoded using the decodeData() function.

👉Generating Key:
Users can generate a random key.
This key can be used for encoding or decoding data.

👉HTML Interface:
Provides a user-friendly interface with links for encoding, decoding, and generating a key.
Users can input the key and data through a form.
Resultant encoded or decoded data is displayed in a textarea.

✅Brief Explanation:
The project consists of two PHP files:

scrambler.php:
This file contains the main functionality of the project.
It handles user inputs, such as the task (encode, decode, or generate key), key, and data.
Depending on the task, it either encodes, decodes, or generates a key.
The encoded or decoded data is displayed to the user.
scramblerf.php:
This file contains the functions required for scrambling and decoding data.
scrambleData() function takes the original data and a key and scrambles the data based on the key.
decodeData() function takes the encoded data and the key used for encoding and decodes the data.
In summary, this project provides a simple tool for encoding and decoding data using a specified key. Users can scramble sensitive information for security purposes and decode it when needed using the same key. It offers a basic yet functional interface for performing these operations.

*/
