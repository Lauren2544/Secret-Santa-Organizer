import smtplib
import json
from email.mime.text import MIMEText
from email.mime.multipart import MIMEMultipart
from datetime import datetime

# SMTP server configuration; use your mail server (e.g. "smtp.gmail.com" for Gmail, "smtp.mail.me.com" for iCloud)
SMTP_HOST = "" ### <-- Enter your SMTP server here ###

# Port 587 is the standard for sending email with STARTTLS encryption.
SMTP_PORT = 587  

# The email address you are sending the emails from (your account).
EMAIL = "" ### <-- Enter your email address here ###

# The password for your email account. Try to use an app-specfic password tho! For icloud you can get your password: https://account.apple.com/ scroll down to "App-Specific Passwords"
PASSWORD = "" ### <-- Enter your email password here ###

# Email details
subject = f"Merry Christmas {datetime.now().year}!!"

# Read the text file containing email addresses and pairings for Secret Santa
with open("results.json", "r") as file:
    santa_data = json.load(file)

messages = []
for entry in santa_data:
    giver = entry["giver"]
    receiver = entry["reciever"]
    giver_email = entry["giveremail"]
    wishlist = entry["recieverwishlist"]

    body = f"""Hi {giver},

For the Secret Santa exchange you are buying for: {receiver}.

Here is {receiver}'s letter to Santa:

Dear Santa, I would like {wishlist} for Christmas.

Thank you!
"""

    messages.append((giver_email, body))

try:
    # Connect to the server and send the email
    server = smtplib.SMTP(SMTP_HOST, SMTP_PORT)
    server.starttls() 
    server.login(EMAIL, PASSWORD)

    # Create the email
    for message in messages:
        msg = MIMEMultipart()
        recipient_email, body = message
        msg['From'] = EMAIL
        msg['To'] = recipient_email
        msg['Subject'] = subject
        msg.attach(MIMEText(body, 'plain'))

        server.send_message(msg)
        print("Email sent successfully!")
        print(recipient_email)

except Exception as e:
    print(f"Error: {e}")
finally:
    server.quit()
