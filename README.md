# Idea/Approach Details
## Problem Statement: Websites content verification based on user rating and reviews.
## Team Leader Name: Tejanmayi G S
## Prototype Description:
We can find number of information related to any topic on the web. Some information on the web can be trusted some may not. In order to find out whether particular information displayed on the web can be trusted or not, we propose a solution where web information is verified as trustable based on the rating and reviews of various users.
The user will read the information displayed on the web and will rate the information. The rating score is used as evidence, based on the ratings of various users and will predict whether the information provided on the web can be trusted or not. The rating score of the user is used as evidence to find out whether the information displayed on the web is trustable or not.
The prototype for this hackathon is as follows: There will be two types of users who will be utilizing the facilities provided by our website.
1. The user who gives the URL and rating as the input along with the appropriate reason.
2. The user who decides whether the particular website is trustable based on the reviews given by other users, further allowing this user to give his/her reviews.

After giving reviews and rating about a particular website, the user can rate other websites based on the suggestions based on user’s interest. Based on these reviews an aggregated rating will be generated which will determine whether a particular website is trustable or not.
This solution will help to built trust between the web users and reduce the false content to be displayed on the web.
## Technology stack:
###### Software:
1. An Operating System : Windows or Ubuntu
2. Wampserver – MySQL
3. Notepad++
###### Hardware:
1.	Processor : Pentium IV processor 2GHz or greater
2.	Monitor, keyboard and mouse
3.	RAM : 1GB or greater
## Use cases:
The system the team proposes is a dynamic one in which it determines whether a website and it’s content is a reliable or an unreliable source of textual, aural or visual content.
The platform used for this model is a website, which is based on user inputs and user reviews. A user puts up a URL or a link to the website that he/ she wants to give a rating and review for or to talk about the authenticity of the content, which is stored on to the database.
If the website already exists on the database, which consists of ratings given by other users previously, the current user’s review and rating is added on along with the previous content of the database.
Based on these inputs stored on the database, the data is aggregated and an outcome based on the reviews is determined. The user can look up these reviews and go to the websites they wish to visit.
## Dependencies:
1.	The website authentication is mainly depending on the ratings given by the user. The system does not detect the false users.
2.	The system accepts the ratings of any user with a valid email ID. Hence, the system does not detect the falsely ratings given by the user.
3.	The solution for the false ratings could be creating an option of dislike/down-vote and like/up-vote for all the ratings. Any user can either up-vote or down-vote the rating. So that the users who are looking for the ratings of the website can verify the validity of the rating by the number of up-vote(s) and down-vote(s).
4.	The initial prototype will not have the detection of the false ratings by the users.

