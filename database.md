//*DATABASE:

user:

/*TABLE:

users:
*
user_id
user_nm
user_pw
user_em
reg_time
user_group;
*

friend:
*
user_id
friend_id
friend_state;
*

add_friend:
*
user_id
add_id
add_state;
*

hash_page:
*
page_id
create_user_id
page_content
page_live_time
visit_user_id
visit_time;
*

not_user_info:
*
user_id
reg_ip
reg_system
last_ip
last_login;
*

user_info:
*
user_id
user_sex
user_age
user_academy
user_major
user_grade
real_name
study_id
sign;
*

user_app:
*
user_id
app_href
app_intro;
*

news:
*
news_id
news_info
news_group
user_id
upload_time;
*

admin_news:
*
user_id
news_content
news_info
news_group
upload_time;
*

news_info:
*
news_id
news_img
news_content
news_visit
news_discuss
on_top
hot
who_can_see;
*

disucss:
*
discuss_id
discuss_content
from_news
parent_discuss
user_id;
*

*/TABLE
**/DATABASE
