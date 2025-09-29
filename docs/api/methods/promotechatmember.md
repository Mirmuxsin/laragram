---
layout: default
title: promoteChatMember
---

# promoteChatMember

Use this method to promote or demote a user in a supergroup or a channel. The bot must be an administrator in the chat for this to work and must have the appropriate administrator rights. Pass *False* for all boolean parameters to demote a user. Returns *True* on success.

## Usage

```php
use Milly\Laragram\Laragram;

$result = Laragram::promoteChatMember($chat_id, $user_id, $is_anonymous = null, $can_manage_chat = null, $can_delete_messages = null, $can_manage_video_chats = null, $can_restrict_members = null, $can_promote_members = null, $can_change_info = null, $can_invite_users = null, $can_post_stories = null, $can_edit_stories = null, $can_delete_stories = null, $can_post_messages = null, $can_edit_messages = null, $can_pin_messages = null, $can_manage_topics = null);
```

## Parameters

- **$chat_id** (`any_of`): Unique identifier for the target chat or username of the target channel (in the format `@channelusername`)
- **$user_id** (`integer`): Unique identifier of the target user
- **$is_anonymous** (`bool|null`): Pass *True* if the administrator's presence in the chat is hidden
- **$can_manage_chat** (`bool|null`): Pass *True* if the administrator can access the chat event log, get boost list, see hidden supergroup and channel members, report spam messages and ignore slow mode. Implied by any other administrator privilege.
- **$can_delete_messages** (`bool|null`): Pass *True* if the administrator can delete messages of other users
- **$can_manage_video_chats** (`bool|null`): Pass *True* if the administrator can manage video chats
- **$can_restrict_members** (`bool|null`): Pass *True* if the administrator can restrict, ban or unban chat members, or access supergroup statistics
- **$can_promote_members** (`bool|null`): Pass *True* if the administrator can add new administrators with a subset of their own privileges or demote administrators that they have promoted, directly or indirectly (promoted by administrators that were appointed by him)
- **$can_change_info** (`bool|null`): Pass *True* if the administrator can change chat title, photo and other settings
- **$can_invite_users** (`bool|null`): Pass *True* if the administrator can invite new users to the chat
- **$can_post_stories** (`bool|null`): Pass *True* if the administrator can post stories to the chat
- **$can_edit_stories** (`bool|null`): Pass *True* if the administrator can edit stories posted by other users, post stories to the chat page, pin chat stories, and access the chat's story archive
- **$can_delete_stories** (`bool|null`): Pass *True* if the administrator can delete stories posted by other users
- **$can_post_messages** (`bool|null`): Pass *True* if the administrator can post messages in the channel, or access channel statistics; for channels only
- **$can_edit_messages** (`bool|null`): Pass *True* if the administrator can edit messages of other users and can pin messages; for channels only
- **$can_pin_messages** (`bool|null`): Pass *True* if the administrator can pin messages; for supergroups only
- **$can_manage_topics** (`bool|null`): Pass *True* if the user is allowed to create, rename, close, and reopen forum topics; for supergroups only


## Return Value

Returns the result of the API call.

## Example

```php
// Example usage of promoteChatMember
$result = Laragram::promoteChatMember($chat_id, $user_id, $is_anonymous = null, $can_manage_chat = null, $can_delete_messages = null, $can_manage_video_chats = null, $can_restrict_members = null, $can_promote_members = null, $can_change_info = null, $can_invite_users = null, $can_post_stories = null, $can_edit_stories = null, $can_delete_stories = null, $can_post_messages = null, $can_edit_messages = null, $can_pin_messages = null, $can_manage_topics = null);

if ($result['ok']) {
    // Success
    $data = $result['result'];
} else {
    // Error
    $error = $result['description'];
}
```

---
*Generated for Telegram Bot API v8*
