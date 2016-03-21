//*DATABASE:

user:

/*TABLE:

users:
*
user_id/int
user_nm
user_pw
user_em
reg_time
user_group;
*

friend:
*
action_id
user_id
friend_id
friend_state/0离线1在线;
*

add_friend:
*
action_id
user_id
add_id
add_state;
*

hash_page:
*
page_id
create_user_id
page_content
page_live_time;
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
user_sex/0女1男
user_age
user_academy
user_major
user_grade
real_name
study_id;
*

user_app:
*
action_id
user_id
app_href
app_intro;
*

news:
*
news_id
news_info
news_group/通知 吐槽 问题 讨论
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
