# CheckoutCalendar
This system allows users to check the availability of rooms or accommodations for a given period, in addition to entering information about the number of guests and children.


Here is an overview of that system:

Functionalities:

Availability Check: Users can enter a desired check-in date and check-out date. The system then checks to see if there are accommodations available for that period.

Number of People and Children: Users can specify the total number of people who will be staying and, if necessary, the number of children. This helps to find suitable accommodation in terms of capacity.

Booking Process: If availability is confirmed, users can proceed with booking. They can provide their personal information, review the booking details and finalize the booking.

Validation: The system validates if the entry and exit dates are valid and if the number of people is reasonable for available accommodations.

Availability Feedback: If the search results in unavailability, the system should provide clear feedback to users, suggesting other available dates or accommodations.

Price Calculation: The system can automatically calculate the total price of the stay based on the selected dates, number of people and applicable rates.

Benefits:

Makes Booking Easy: The system simplifies the booking process, allowing users to quickly see which dates and accommodations are available.

Saves Time: Users don't need to contact us directly to check availability, saving time for both parties.

Personalization: Users can adjust their dates and options according to their needs, obtaining a personalized experience.

Error Reduction: Automation reduces the likelihood of human error when calculating availability and pricing.

Fast Feedback: Users receive instant feedback on availability and suitability of dates and accommodations.

Considerations:

Integration: The system must be integrated with the accommodation database and updated availability information.

Scalability: The system must be able to handle multiple simultaneous queries without affecting performance.


The code shown is an excerpt from an HTML page that creates a booking form with input and output date fields. It also incorporates functionality to interact with these fields and to display messages using the SweetAlert library.

The JavaScript script that runs when the document is ready ($(document).ready(function() {...}) includes the following functionality:

When the input date is selected, the code calculates the output date automatically, adding 2 days to the input date. The output date value is then formatted and entered into the corresponding field.

When the form is submitted, the code prevents the form's default behavior and performs the following actions:

Checks if the output date is later than the input date.
If validation fails, displays an error message using Swal.fire from the SweetAlert library.
If the validation is successful, it sends the form data via AJAX to a PHP file called "send_whatsapp.php".
Upon successful submission, display a success message using Swal.fire.
This code is a combination of HTML, JavaScript and the SweetAlert library to create an interactive booking form and display error/success messages in an attractive way. Make sure you embed the code in your HTML page and include the necessary dependencies such as jQuery and SweetAlert (using the link provided in the code).

User Experience: The interface must be intuitive and user-friendly, ensuring a pleasant experience.

Security: Users' personal data must be handled securely and in compliance with privacy regulations.

The availability and booking check system is critical to providing an efficient and satisfying experience for users who want to book accommodation in a convenient and transparent way.
