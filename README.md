# RTO Management System

> A website basically built to issue driving license to citizens. Citizens can apply for learner's license, driving license, vehicle registration and monitor the status of application. Citizens can also submit complaints/queries.
## Steps to Setup Project :-

1. Install XAMPP on your `Windows OS`. [download](https://github.com/vinugawade/RTO-Management-System/releases/tag/v1.0.0) or [clone](https://github.com/vinugawade/RTO-Management-System.git) this repository and put inside the `htdocs` of your XAMPP.
2. After doing whatever is mentioned in step 1, create a database with the name `rto_db` (that`s the name I gave to the database while running the project).
3. Import the `database/rto_db.sql` under the `rto_db` in `phpmyadmin` using MySQL.
4. Configure the database `username` & `password` with project by editing `include/connect.php` file.
5. Now copy the folder i.e. `RTO-Management-System` by default. You can rename it as you want.
6. Start the `Apache server` and `MySQL service` in XAMPP. Then open up your browser and type `localhost/RTO-Management-System` or `localhost/<renamed_project_folder>`
7. Default `admin` login credentials are :- `admin / admin`.
## Technologies

![PHP](https://img.shields.io/static/v1?style=flat-square&label&style=for-the-badge&logo=php&message=PHP&color=777BB4&labelColor=white)
![BOOTSTRAP](https://img.shields.io/static/v1?style=flat-square&label&style=for-the-badge&logo=BOOTSTRAP&message=Bootstrap&color=7952B3&labelColor=white&logoColor=7952B3)
![JAVASCRIPT](https://img.shields.io/static/v1?style=flat-square&label&style=for-the-badge&logo=JavaScript&message=JavaScript&color=F7DF1E&labelColor=black)
![CSS3](https://img.shields.io/static/v1?style=flat-square&label&style=for-the-badge&logo=CSS3&message=CSS3&color=1572B6&labelColor=white&logoColor=1572B6)
![MySQL](https://img.shields.io/static/v1?style=flat-square&label&style=for-the-badge&logo=MySQL&message=MySQL&color=4479A1&labelColor=white&logoColor=1572B6)
![GitHub](https://img.shields.io/static/v1?style=flat-square&label&style=for-the-badge&logo=GitHub&message=GitHub&color=181717&labelColor=white&logoColor=181717)
![Git](https://img.shields.io/static/v1?style=flat-square&label&style=for-the-badge&logo=Git&message=Git&color=F05032&labelColor=white&logoColor=F05032)

## Screenshots

![Home](https://i.ibb.co/D5vWYVF/image.png)

![Vehicle Registration](https://i.ibb.co/0K7xfW6/image.png)

![User Registration](https://i.ibb.co/9Wj0v6x/image.png)

![Driving License](https://i.ibb.co/9rcg6cx/image.png)

## ToDo List

1. Secure login.
2. More secure data validation.
3. Latest UI technologies.
# Author

>### ✨ [Vinay Gawade](https://github.com/vinugawade) 👨🏻‍💻

# 📝 License

> This project is [GNU GPLv3](https://github.com/vinugawade/RTO-Management-System/blob/master/license) licensed.