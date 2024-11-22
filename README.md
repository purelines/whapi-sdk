# OpenAPIClient-php

Sending and receiving messages using HTTP requests. Fixed price with no hidden fees, without limits and restrictions. You will be able to send and receive text/media/files/locations/goods/orders/polls messages via WhatsApp in private or group chats. Guides and SDK can be found on our website.

For more information, please visit [https://whapi.cloud/support](https://whapi.cloud/support).

## Installation & Usage

### Requirements

PHP 7.4 and later.
Should also work with PHP 8.0.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/GIT_USER_ID/GIT_REPO_ID.git"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/OpenAPIClient-php/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure API key authorization: tokenAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

// Configure Bearer (token) authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BlacklistApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contact_id = 'contact_id_example'; // string | Contact ID

try {
    $result = $apiInstance->blacklistAdd($contact_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BlacklistApi->blacklistAdd: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://gate.whapi.cloud*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*BlacklistApi* | [**blacklistAdd**](docs/Api/BlacklistApi.md#blacklistadd) | **PUT** /blacklist/{ContactID} | Add contact to blacklist
*BlacklistApi* | [**blacklistRemove**](docs/Api/BlacklistApi.md#blacklistremove) | **DELETE** /blacklist/{ContactID} | Remove contact from blacklist
*BusinessApi* | [**createCollection**](docs/Api/BusinessApi.md#createcollection) | **POST** /business/collections | Create collection
*BusinessApi* | [**createProduct**](docs/Api/BusinessApi.md#createproduct) | **POST** /business/products | Create product
*BusinessApi* | [**deleteCollection**](docs/Api/BusinessApi.md#deletecollection) | **DELETE** /business/collections/{CollectionID} | Delete collection
*BusinessApi* | [**deleteProduct**](docs/Api/BusinessApi.md#deleteproduct) | **DELETE** /business/products/{ProductID} | Delete product
*BusinessApi* | [**editBusinessProfile**](docs/Api/BusinessApi.md#editbusinessprofile) | **POST** /business | Edit your Business Profile
*BusinessApi* | [**editCollection**](docs/Api/BusinessApi.md#editcollection) | **PATCH** /business/collections/{CollectionID} | Edit collection
*BusinessApi* | [**getBusinessProfile**](docs/Api/BusinessApi.md#getbusinessprofile) | **GET** /business | Get business profile
*BusinessApi* | [**getCollection**](docs/Api/BusinessApi.md#getcollection) | **GET** /business/collections/{CollectionID} | Get collection
*BusinessApi* | [**getCollectionsList**](docs/Api/BusinessApi.md#getcollectionslist) | **GET** /business/collections | Get collections
*BusinessApi* | [**getContactProducts**](docs/Api/BusinessApi.md#getcontactproducts) | **GET** /business/{ContactID}/products | Get products by Contact ID
*BusinessApi* | [**getOrderItems**](docs/Api/BusinessApi.md#getorderitems) | **GET** /business/orders/{OrderID} | Get order items
*BusinessApi* | [**getProduct**](docs/Api/BusinessApi.md#getproduct) | **GET** /business/products/{ProductID} | Get product
*BusinessApi* | [**getProducts**](docs/Api/BusinessApi.md#getproducts) | **GET** /business/products | Get products
*BusinessApi* | [**sendCatalog**](docs/Api/BusinessApi.md#sendcatalog) | **POST** /business/catalogs/{ContactID} | Send catalog by Contact ID (phone number)
*BusinessApi* | [**sendProduct**](docs/Api/BusinessApi.md#sendproduct) | **POST** /business/products/{ProductID} | Send product
*BusinessApi* | [**updateProduct**](docs/Api/BusinessApi.md#updateproduct) | **PATCH** /business/products/{ProductID} | Update product
*ChannelApi* | [**checkHealth**](docs/Api/ChannelApi.md#checkhealth) | **GET** /health | Check health &amp; launch channel
*ChannelApi* | [**getAllowedEvents**](docs/Api/ChannelApi.md#getallowedevents) | **GET** /settings/events | Get allowed events
*ChannelApi* | [**getChannelSettings**](docs/Api/ChannelApi.md#getchannelsettings) | **GET** /settings | Get channel settings
*ChannelApi* | [**getLimits**](docs/Api/ChannelApi.md#getlimits) | **GET** /limits | Get limits
*ChannelApi* | [**resetChannelSettings**](docs/Api/ChannelApi.md#resetchannelsettings) | **DELETE** /settings | Reset channel settings
*ChannelApi* | [**updateChannelSettings**](docs/Api/ChannelApi.md#updatechannelsettings) | **PATCH** /settings | Update channel settings
*ChannelApi* | [**webhookTest**](docs/Api/ChannelApi.md#webhooktest) | **POST** /settings/webhook_test | Test webhook
*ChatsApi* | [**archiveChat**](docs/Api/ChatsApi.md#archivechat) | **POST** /chats/{ChatID} | 🗄 Archive/Unarchive chat
*ChatsApi* | [**deleteChat**](docs/Api/ChatsApi.md#deletechat) | **DELETE** /chats/{ChatID} | ❌ Delete chat
*ChatsApi* | [**getChat**](docs/Api/ChatsApi.md#getchat) | **GET** /chats/{ChatID} | Get chat
*ChatsApi* | [**getChats**](docs/Api/ChatsApi.md#getchats) | **GET** /chats | Get chats
*ChatsApi* | [**patchChat**](docs/Api/ChatsApi.md#patchchat) | **PATCH** /chats/{ChatID} | 📌 Pin/Unpin chat or 🔇 Mute/Unmute chat or ✔✔ Mark as read/unread chat
*CommunitiesApi* | [**addCommunityParticipant**](docs/Api/CommunitiesApi.md#addcommunityparticipant) | **POST** /communities/{CommunityID}/participants | Add participants to community
*CommunitiesApi* | [**changeCommunitySettings**](docs/Api/CommunitiesApi.md#changecommunitysettings) | **PATCH** /communities/{CommunityID}/settings | Change community settings
*CommunitiesApi* | [**createCommunity**](docs/Api/CommunitiesApi.md#createcommunity) | **POST** /communities | Create community
*CommunitiesApi* | [**deactivateCommunity**](docs/Api/CommunitiesApi.md#deactivatecommunity) | **DELETE** /communities/{CommunityID} | Deactivate community
*CommunitiesApi* | [**demoteCommunityParticipant**](docs/Api/CommunitiesApi.md#demotecommunityparticipant) | **DELETE** /communities/{CommunityID}/admins | Demote participants to admin in community
*CommunitiesApi* | [**getCommunities**](docs/Api/CommunitiesApi.md#getcommunities) | **GET** /communities | Get communities
*CommunitiesApi* | [**getCommunity**](docs/Api/CommunitiesApi.md#getcommunity) | **GET** /communities/{CommunityID} | Get community
*CommunitiesApi* | [**getCommunitySubGroups**](docs/Api/CommunitiesApi.md#getcommunitysubgroups) | **GET** /communities/{CommunityID}/subGroups | Get community subgroups
*CommunitiesApi* | [**linkGroupToCommunity**](docs/Api/CommunitiesApi.md#linkgrouptocommunity) | **PUT** /communities/{CommunityID}/{GroupID} | Link group to community
*CommunitiesApi* | [**promoteCommunityParticipant**](docs/Api/CommunitiesApi.md#promotecommunityparticipant) | **PATCH** /communities/{CommunityID}/admins | Promote participants to admin in community
*CommunitiesApi* | [**removeCommunityParticipant**](docs/Api/CommunitiesApi.md#removecommunityparticipant) | **DELETE** /communities/{CommunityID}/participants | Remove participants from community
*CommunitiesApi* | [**revokeCommunityInvite**](docs/Api/CommunitiesApi.md#revokecommunityinvite) | **DELETE** /communities/{CommunityID}/revokeInviteUrl | Revoke community invite
*CommunitiesApi* | [**unlinkGroupFromCommunity**](docs/Api/CommunitiesApi.md#unlinkgroupfromcommunity) | **DELETE** /communities/{CommunityID}/{GroupID} | Unlink group from community
*ContactsApi* | [**checkPhones**](docs/Api/ContactsApi.md#checkphones) | **POST** /contacts | Check phones
*ContactsApi* | [**getContact**](docs/Api/ContactsApi.md#getcontact) | **GET** /contacts/{ContactID} | Get contact
*ContactsApi* | [**getContactProfile**](docs/Api/ContactsApi.md#getcontactprofile) | **GET** /contacts/{ContactID}/profile | Get profile
*ContactsApi* | [**getContacts**](docs/Api/ContactsApi.md#getcontacts) | **GET** /contacts | Get contacts
*ContactsApi* | [**sendContact**](docs/Api/ContactsApi.md#sendcontact) | **POST** /contacts/{ContactID} | Send contact
*GroupsApi* | [**acceptGroupInvite**](docs/Api/GroupsApi.md#acceptgroupinvite) | **PUT** /groups | Accept group invite
*GroupsApi* | [**addGroupParticipant**](docs/Api/GroupsApi.md#addgroupparticipant) | **POST** /groups/{GroupID}/participants | Add group participant
*GroupsApi* | [**approveGroupApplicationsList**](docs/Api/GroupsApi.md#approvegroupapplicationslist) | **POST** /groups/{GroupID}/applications | Accept group applications for listed users
*GroupsApi* | [**createGroup**](docs/Api/GroupsApi.md#creategroup) | **POST** /groups | Create group
*GroupsApi* | [**deleteGroupIcon**](docs/Api/GroupsApi.md#deletegroupicon) | **DELETE** /groups/{GroupID}/icon | Delete group icon
*GroupsApi* | [**demoteGroupAdmin**](docs/Api/GroupsApi.md#demotegroupadmin) | **DELETE** /groups/{GroupID}/admins | Demote group admin
*GroupsApi* | [**getGroup**](docs/Api/GroupsApi.md#getgroup) | **GET** /groups/{GroupID} | Get group
*GroupsApi* | [**getGroupApplicationsList**](docs/Api/GroupsApi.md#getgroupapplicationslist) | **GET** /groups/{GroupID}/applications | Get list of join requests to the group
*GroupsApi* | [**getGroupIcon**](docs/Api/GroupsApi.md#getgroupicon) | **GET** /groups/{GroupID}/icon | Get group icon
*GroupsApi* | [**getGroupInvite**](docs/Api/GroupsApi.md#getgroupinvite) | **GET** /groups/{GroupID}/invite | Get group invite
*GroupsApi* | [**getGroupMetadataByInviteCode**](docs/Api/GroupsApi.md#getgroupmetadatabyinvitecode) | **GET** /groups/link/{InviteCode} | Get group info by invite code
*GroupsApi* | [**getGroups**](docs/Api/GroupsApi.md#getgroups) | **GET** /groups | Get groups
*GroupsApi* | [**leaveGroup**](docs/Api/GroupsApi.md#leavegroup) | **DELETE** /groups/{GroupID} | Leave group
*GroupsApi* | [**promoteToGroupAdmin**](docs/Api/GroupsApi.md#promotetogroupadmin) | **PATCH** /groups/{GroupID}/admins | Promote to group admin
*GroupsApi* | [**rejectGroupApplicationsList**](docs/Api/GroupsApi.md#rejectgroupapplicationslist) | **DELETE** /groups/{GroupID}/applications | Reject group applications for listed users
*GroupsApi* | [**removeGroupParticipant**](docs/Api/GroupsApi.md#removegroupparticipant) | **DELETE** /groups/{GroupID}/participants | Remove group participant
*GroupsApi* | [**revokeGroupInvite**](docs/Api/GroupsApi.md#revokegroupinvite) | **DELETE** /groups/{GroupID}/invite | Revoke group invite
*GroupsApi* | [**sendGroupInvite**](docs/Api/GroupsApi.md#sendgroupinvite) | **POST** /groups/link/{InviteCode} | Send group invite link
*GroupsApi* | [**setGroupIcon**](docs/Api/GroupsApi.md#setgroupicon) | **PUT** /groups/{GroupID}/icon | Set group icon
*GroupsApi* | [**updateGroupInfo**](docs/Api/GroupsApi.md#updategroupinfo) | **PUT** /groups/{GroupID} | Update group info
*GroupsApi* | [**updateGroupSetting**](docs/Api/GroupsApi.md#updategroupsetting) | **PATCH** /groups/{GroupID} | Update group setting
*LabelsApi* | [**addLabelAssociation**](docs/Api/LabelsApi.md#addlabelassociation) | **POST** /labels/{LabelID}/{AssociationID} | Add label association
*LabelsApi* | [**deleteLabelAssociation**](docs/Api/LabelsApi.md#deletelabelassociation) | **DELETE** /labels/{LabelID}/{AssociationID} | Delete label association
*LabelsApi* | [**getLabelAssociations**](docs/Api/LabelsApi.md#getlabelassociations) | **GET** /labels/{LabelID} | Get objects associated with label
*LabelsApi* | [**getLabels**](docs/Api/LabelsApi.md#getlabels) | **GET** /labels | Get labels
*MediaApi* | [**deleteMedia**](docs/Api/MediaApi.md#deletemedia) | **DELETE** /media/{MediaID} | Delete media
*MediaApi* | [**getMedia**](docs/Api/MediaApi.md#getmedia) | **GET** /media/{MediaID} | Get media
*MediaApi* | [**getMediaFiles**](docs/Api/MediaApi.md#getmediafiles) | **GET** /media | Get media files
*MediaApi* | [**uploadMedia**](docs/Api/MediaApi.md#uploadmedia) | **POST** /media | Upload media
*MessagesApi* | [**deleteMessage**](docs/Api/MessagesApi.md#deletemessage) | **DELETE** /messages/{MessageID} | ❌ Delete message
*MessagesApi* | [**forwardMessage**](docs/Api/MessagesApi.md#forwardmessage) | **POST** /messages/{MessageID} | ↪ Forward message
*MessagesApi* | [**getMessage**](docs/Api/MessagesApi.md#getmessage) | **GET** /messages/{MessageID} | Get message
*MessagesApi* | [**getMessages**](docs/Api/MessagesApi.md#getmessages) | **GET** /messages/list | Get messages
*MessagesApi* | [**getMessagesByChatID**](docs/Api/MessagesApi.md#getmessagesbychatid) | **GET** /messages/list/{ChatID} | Get messages by chat ID
*MessagesApi* | [**markMessageAsRead**](docs/Api/MessagesApi.md#markmessageasread) | **PUT** /messages/{MessageID} | ✔✔ Mark message as read
*MessagesApi* | [**reactToMessage**](docs/Api/MessagesApi.md#reacttomessage) | **PUT** /messages/{MessageID}/reaction | 😍 React to message
*MessagesApi* | [**sendMediaMessage**](docs/Api/MessagesApi.md#sendmediamessage) | **POST** /messages/media/{MediaMessageType} | 📎 Send media message
*MessagesApi* | [**sendMessageAudio**](docs/Api/MessagesApi.md#sendmessageaudio) | **POST** /messages/audio | 🎵 Send media-audio message
*MessagesApi* | [**sendMessageContact**](docs/Api/MessagesApi.md#sendmessagecontact) | **POST** /messages/contact | 👤 Send contact message
*MessagesApi* | [**sendMessageContactList**](docs/Api/MessagesApi.md#sendmessagecontactlist) | **POST** /messages/contact_list | 👥 Send contact list message
*MessagesApi* | [**sendMessageDocument**](docs/Api/MessagesApi.md#sendmessagedocument) | **POST** /messages/document | 📑 Send media-document message
*MessagesApi* | [**sendMessageGif**](docs/Api/MessagesApi.md#sendmessagegif) | **POST** /messages/gif | 🎬 Send media-gif message
*MessagesApi* | [**sendMessageImage**](docs/Api/MessagesApi.md#sendmessageimage) | **POST** /messages/image | 🖼 Send media-image message
*MessagesApi* | [**sendMessageInteractive**](docs/Api/MessagesApi.md#sendmessageinteractive) | **POST** /messages/interactive | 🎮 Send interactive message
*MessagesApi* | [**sendMessageLinkPreview**](docs/Api/MessagesApi.md#sendmessagelinkpreview) | **POST** /messages/link_preview | 📎 Send link preview message
*MessagesApi* | [**sendMessageLiveLocation**](docs/Api/MessagesApi.md#sendmessagelivelocation) | **POST** /messages/live_location | 🧭 Send live location message
*MessagesApi* | [**sendMessageLocation**](docs/Api/MessagesApi.md#sendmessagelocation) | **POST** /messages/location | 📍 Send location message
*MessagesApi* | [**sendMessagePoll**](docs/Api/MessagesApi.md#sendmessagepoll) | **POST** /messages/poll | 📊 Send poll message
*MessagesApi* | [**sendMessageShort**](docs/Api/MessagesApi.md#sendmessageshort) | **POST** /messages/short | 📹 Send media-short video message (PTV)
*MessagesApi* | [**sendMessageSticker**](docs/Api/MessagesApi.md#sendmessagesticker) | **POST** /messages/sticker | 🎭 Send media-sticker message
*MessagesApi* | [**sendMessageStory**](docs/Api/MessagesApi.md#sendmessagestory) | **POST** /messages/story | 👁️‍🗨️ Send story message
*MessagesApi* | [**sendMessageStoryAudio**](docs/Api/MessagesApi.md#sendmessagestoryaudio) | **POST** /messages/story/audio | 🎵️ Send story audio message
*MessagesApi* | [**sendMessageStoryMedia**](docs/Api/MessagesApi.md#sendmessagestorymedia) | **POST** /messages/story/media | 🖼 Send story media message
*MessagesApi* | [**sendMessageStoryText**](docs/Api/MessagesApi.md#sendmessagestorytext) | **POST** /messages/story/text | 💬 Send story text message
*MessagesApi* | [**sendMessageText**](docs/Api/MessagesApi.md#sendmessagetext) | **POST** /messages/text | 💬 Send text message
*MessagesApi* | [**sendMessageVideo**](docs/Api/MessagesApi.md#sendmessagevideo) | **POST** /messages/video | 🎥 Send media-video message
*MessagesApi* | [**sendMessageVoice**](docs/Api/MessagesApi.md#sendmessagevoice) | **POST** /messages/voice | 🎤 Send media-voice message
*MessagesApi* | [**starMessage**](docs/Api/MessagesApi.md#starmessage) | **PUT** /messages/{MessageID}/star | ⭐ Star message
*NewslettersApi* | [**acceptNewsletterAdminRequest**](docs/Api/NewslettersApi.md#acceptnewsletteradminrequest) | **PUT** /newsletters/{NewsletterID}/admins/{ContactID} | Accept Newsletter admin-request
*NewslettersApi* | [**createNewsletter**](docs/Api/NewslettersApi.md#createnewsletter) | **POST** /newsletters | Create newsletter
*NewslettersApi* | [**createNewsletterAdminInvite**](docs/Api/NewslettersApi.md#createnewsletteradmininvite) | **POST** /newsletters/{NewsletterID}/invite/{ContactID} | Create Newsletter admin-invite
*NewslettersApi* | [**deleteNewsletter**](docs/Api/NewslettersApi.md#deletenewsletter) | **DELETE** /newsletters/{NewsletterID} | Delete newsletter
*NewslettersApi* | [**demoteNewsletterAdmin**](docs/Api/NewslettersApi.md#demotenewsletteradmin) | **DELETE** /newsletters/{NewsletterID}/admins/{ContactID} | Demote Newsletter admin
*NewslettersApi* | [**editNewsletter**](docs/Api/NewslettersApi.md#editnewsletter) | **PATCH** /newsletters/{NewsletterID} | Edit newsletter
*NewslettersApi* | [**findNewsletter**](docs/Api/NewslettersApi.md#findnewsletter) | **GET** /newsletters/find | Find newsletters by filters
*NewslettersApi* | [**getMessagesNewsletter**](docs/Api/NewslettersApi.md#getmessagesnewsletter) | **GET** /newsletters/{NewsletterID}/messages | Get newsletter messages
*NewslettersApi* | [**getNewsletter**](docs/Api/NewslettersApi.md#getnewsletter) | **GET** /newsletters/{NewsletterID} | Get newsletter information
*NewslettersApi* | [**getNewsletterByInviteCode**](docs/Api/NewslettersApi.md#getnewsletterbyinvitecode) | **GET** /newsletters/link/{NewsletterInviteCode} | Get newsletter info by invite code
*NewslettersApi* | [**getNewsletters**](docs/Api/NewslettersApi.md#getnewsletters) | **GET** /newsletters | Get newsletters
*NewslettersApi* | [**recommendedNewsletter**](docs/Api/NewslettersApi.md#recommendednewsletter) | **GET** /newsletters/recommended | Get recommended newsletters by country
*NewslettersApi* | [**revokeNewsletterAdminInvite**](docs/Api/NewslettersApi.md#revokenewsletteradmininvite) | **DELETE** /newsletters/{NewsletterID}/invite/{ContactID} | Revoke Newsletter admin-invite
*NewslettersApi* | [**sendNewsletterInvite**](docs/Api/NewslettersApi.md#sendnewsletterinvite) | **POST** /newsletters/link/{NewsletterInviteCode} | Send newsletter invite link
*NewslettersApi* | [**subscribeNewsletter**](docs/Api/NewslettersApi.md#subscribenewsletter) | **POST** /newsletters/{NewsletterID}/subscription | Subscribe to newsletter
*NewslettersApi* | [**subscribeNewsletterInvite**](docs/Api/NewslettersApi.md#subscribenewsletterinvite) | **POST** /newsletters/invite/{NewsletterInviteCode}/subscription | Subscribe to newsletter by invite code
*NewslettersApi* | [**trackingNewsletter**](docs/Api/NewslettersApi.md#trackingnewsletter) | **POST** /newsletters/{NewsletterID}/tracking | Subscribe to newsletter updates
*NewslettersApi* | [**unsubscribeNewsletter**](docs/Api/NewslettersApi.md#unsubscribenewsletter) | **DELETE** /newsletters/{NewsletterID}/subscription | Unsubscribe from newsletter
*NewslettersApi* | [**unsubscribeNewsletterInvite**](docs/Api/NewslettersApi.md#unsubscribenewsletterinvite) | **DELETE** /newsletters/invite/{NewsletterInviteCode}/subscription | Unsubscribe from newsletter by invite code
*PresencesApi* | [**getPresence**](docs/Api/PresencesApi.md#getpresence) | **GET** /presences/{EntryID} | Get presence
*PresencesApi* | [**sendMePresence**](docs/Api/PresencesApi.md#sendmepresence) | **PUT** /presences/me | Send online or offline presence
*PresencesApi* | [**sendPresence**](docs/Api/PresencesApi.md#sendpresence) | **PUT** /presences/{EntryID} | Send typing or recording presence
*PresencesApi* | [**subscribePresence**](docs/Api/PresencesApi.md#subscribepresence) | **POST** /presences/{EntryID} | Subscribe to presence
*StatusesApi* | [**getMessageViewStatuses**](docs/Api/StatusesApi.md#getmessageviewstatuses) | **GET** /statuses/{MessageID} | Get message or story view statuses
*StoriesApi* | [**createStory**](docs/Api/StoriesApi.md#createstory) | **POST** /stories | Create &amp; publish story
*StoriesApi* | [**createStoryAudio**](docs/Api/StoriesApi.md#createstoryaudio) | **POST** /stories/send/audio | 🎵️ Post audio story
*StoriesApi* | [**createStoryMedia**](docs/Api/StoriesApi.md#createstorymedia) | **POST** /stories/send/media | 🖼 Post media story
*StoriesApi* | [**createStoryText**](docs/Api/StoriesApi.md#createstorytext) | **POST** /stories/send/text | 💬 Post text story
*StoriesApi* | [**getStories**](docs/Api/StoriesApi.md#getstories) | **GET** /stories | Get list of stories
*StoriesApi* | [**sendMessageStoryText_0**](docs/Api/StoriesApi.md#sendmessagestorytext_0) | **POST** /messages/story/text | 💬 Send story text message
*UsersApi* | [**getUserProfile**](docs/Api/UsersApi.md#getuserprofile) | **GET** /users/profile | User info
*UsersApi* | [**loginUser**](docs/Api/UsersApi.md#loginuser) | **GET** /users/login | Login user with QR-base64
*UsersApi* | [**loginUserImage**](docs/Api/UsersApi.md#loginuserimage) | **GET** /users/login/image | Login user with QR-image
*UsersApi* | [**loginUserRowData**](docs/Api/UsersApi.md#loginuserrowdata) | **GET** /users/login/rowdata | Login user with QR-rowdata
*UsersApi* | [**loginUserViaAuthCode**](docs/Api/UsersApi.md#loginuserviaauthcode) | **GET** /users/login/{PhoneNumber} | Get auth code by phone number
*UsersApi* | [**loginUserViaMobile**](docs/Api/UsersApi.md#loginuserviamobile) | **POST** /users/login/mobile | Login in whatsapp with phone number
*UsersApi* | [**logoutUser**](docs/Api/UsersApi.md#logoutuser) | **POST** /users/logout | Logout user
*UsersApi* | [**updateUserProfile**](docs/Api/UsersApi.md#updateuserprofile) | **PATCH** /users/profile | Update user info

## Models

- [ActionButtons](docs/Model/ActionButtons.md)
- [ActionList](docs/Model/ActionList.md)
- [ActionListSectionsInner](docs/Model/ActionListSectionsInner.md)
- [ActionListSectionsInnerProductItemsInner](docs/Model/ActionListSectionsInnerProductItemsInner.md)
- [ActionListSectionsInnerRowsInner](docs/Model/ActionListSectionsInnerRowsInner.md)
- [ActionProduct](docs/Model/ActionProduct.md)
- [AddLabelAssociationAssociationIDParameter](docs/Model/AddLabelAssociationAssociationIDParameter.md)
- [ApplicationRequest](docs/Model/ApplicationRequest.md)
- [ArchiveChatRequest](docs/Model/ArchiveChatRequest.md)
- [AuthCode](docs/Model/AuthCode.md)
- [BusinessCollection](docs/Model/BusinessCollection.md)
- [BusinessCollectionCreate](docs/Model/BusinessCollectionCreate.md)
- [BusinessCollectionEdit](docs/Model/BusinessCollectionEdit.md)
- [BusinessCollectionEditResult](docs/Model/BusinessCollectionEditResult.md)
- [BusinessCollectionList](docs/Model/BusinessCollectionList.md)
- [BusinessHours](docs/Model/BusinessHours.md)
- [BusinessProfile](docs/Model/BusinessProfile.md)
- [BusinessProfileCustom](docs/Model/BusinessProfileCustom.md)
- [BusinessProfileCustomHours](docs/Model/BusinessProfileCustomHours.md)
- [Button](docs/Model/Button.md)
- [ButtonList](docs/Model/ButtonList.md)
- [ButtonsReply](docs/Model/ButtonsReply.md)
- [CallEvent](docs/Model/CallEvent.md)
- [ChangeCommunitySettingsRequest](docs/Model/ChangeCommunitySettingsRequest.md)
- [ChannelStatus](docs/Model/ChannelStatus.md)
- [Chat](docs/Model/Chat.md)
- [ChatUpdate](docs/Model/ChatUpdate.md)
- [ChatsList](docs/Model/ChatsList.md)
- [CheckContact](docs/Model/CheckContact.md)
- [CheckContactRequest](docs/Model/CheckContactRequest.md)
- [CheckContactResponse](docs/Model/CheckContactResponse.md)
- [CommunitySubGroups](docs/Model/CommunitySubGroups.md)
- [CommunitySubGroupsAnnounceGroupInfo](docs/Model/CommunitySubGroupsAnnounceGroupInfo.md)
- [CommunitySubGroupsOtherGroupsInner](docs/Model/CommunitySubGroupsOtherGroupsInner.md)
- [CommunitySubGroupsOtherGroupsInnerProperties](docs/Model/CommunitySubGroupsOtherGroupsInnerProperties.md)
- [Contact](docs/Model/Contact.md)
- [ContactUpdate](docs/Model/ContactUpdate.md)
- [ContactsList](docs/Model/ContactsList.md)
- [CreateCommunityRequest](docs/Model/CreateCommunityRequest.md)
- [CreateGroupRequest](docs/Model/CreateGroupRequest.md)
- [CreateNewsletterAdminInviteRequest](docs/Model/CreateNewsletterAdminInviteRequest.md)
- [CreateNewsletterRequest](docs/Model/CreateNewsletterRequest.md)
- [Currency](docs/Model/Currency.md)
- [EditNewsletterRequest](docs/Model/EditNewsletterRequest.md)
- [Error](docs/Model/Error.md)
- [Event](docs/Model/Event.md)
- [EventResponse](docs/Model/EventResponse.md)
- [ForwardMessage](docs/Model/ForwardMessage.md)
- [GetPresenceEntryIDParameter](docs/Model/GetPresenceEntryIDParameter.md)
- [Group](docs/Model/Group.md)
- [GroupApplication](docs/Model/GroupApplication.md)
- [GroupApplicationChange](docs/Model/GroupApplicationChange.md)
- [GroupApplicationList](docs/Model/GroupApplicationList.md)
- [GroupCreate](docs/Model/GroupCreate.md)
- [GroupIconParameters](docs/Model/GroupIconParameters.md)
- [GroupIconParametersMedia](docs/Model/GroupIconParametersMedia.md)
- [GroupInfoByInviteCode](docs/Model/GroupInfoByInviteCode.md)
- [GroupInvite](docs/Model/GroupInvite.md)
- [GroupUpdate](docs/Model/GroupUpdate.md)
- [GroupsList](docs/Model/GroupsList.md)
- [HSMButton](docs/Model/HSMButton.md)
- [Health](docs/Model/Health.md)
- [InteractiveAction](docs/Model/InteractiveAction.md)
- [InteractiveType](docs/Model/InteractiveType.md)
- [Iterator](docs/Model/Iterator.md)
- [Label](docs/Model/Label.md)
- [LabelAssociations](docs/Model/LabelAssociations.md)
- [Limits](docs/Model/Limits.md)
- [ListParticipantsRequest](docs/Model/ListParticipantsRequest.md)
- [ListReply](docs/Model/ListReply.md)
- [MediaFile](docs/Model/MediaFile.md)
- [MediaFilesList](docs/Model/MediaFilesList.md)
- [MediaMessageType](docs/Model/MediaMessageType.md)
- [MediaSettings](docs/Model/MediaSettings.md)
- [Mentions](docs/Model/Mentions.md)
- [Message](docs/Model/Message.md)
- [MessageAction](docs/Model/MessageAction.md)
- [MessageContent](docs/Model/MessageContent.md)
- [MessageContentAudio](docs/Model/MessageContentAudio.md)
- [MessageContentButtons](docs/Model/MessageContentButtons.md)
- [MessageContentButtonsButtonsInner](docs/Model/MessageContentButtonsButtonsInner.md)
- [MessageContentContact](docs/Model/MessageContentContact.md)
- [MessageContentContacts](docs/Model/MessageContentContacts.md)
- [MessageContentDocument](docs/Model/MessageContentDocument.md)
- [MessageContentEvent](docs/Model/MessageContentEvent.md)
- [MessageContentHSM](docs/Model/MessageContentHSM.md)
- [MessageContentHSMHeader](docs/Model/MessageContentHSMHeader.md)
- [MessageContentImage](docs/Model/MessageContentImage.md)
- [MessageContentInteractive](docs/Model/MessageContentInteractive.md)
- [MessageContentLinkPreview](docs/Model/MessageContentLinkPreview.md)
- [MessageContentList](docs/Model/MessageContentList.md)
- [MessageContentListSectionsInner](docs/Model/MessageContentListSectionsInner.md)
- [MessageContentListSectionsInnerRowsInner](docs/Model/MessageContentListSectionsInnerRowsInner.md)
- [MessageContentLiveLocation](docs/Model/MessageContentLiveLocation.md)
- [MessageContentLocation](docs/Model/MessageContentLocation.md)
- [MessageContentNewsletterAdminInvite](docs/Model/MessageContentNewsletterAdminInvite.md)
- [MessageContentOrder](docs/Model/MessageContentOrder.md)
- [MessageContentPoll](docs/Model/MessageContentPoll.md)
- [MessageContentProduct](docs/Model/MessageContentProduct.md)
- [MessageContentProductItems](docs/Model/MessageContentProductItems.md)
- [MessageContentReply](docs/Model/MessageContentReply.md)
- [MessageContentSticker](docs/Model/MessageContentSticker.md)
- [MessageContentSystem](docs/Model/MessageContentSystem.md)
- [MessageContentText](docs/Model/MessageContentText.md)
- [MessageContentVideo](docs/Model/MessageContentVideo.md)
- [MessageContext](docs/Model/MessageContext.md)
- [MessageContextAD](docs/Model/MessageContextAD.md)
- [MessageContextADSource](docs/Model/MessageContextADSource.md)
- [MessageContextConversion](docs/Model/MessageContextConversion.md)
- [MessageMediaFileParametersForMediaUpload](docs/Model/MessageMediaFileParametersForMediaUpload.md)
- [MessageMediaFileParametersForMediaUploadMedia](docs/Model/MessageMediaFileParametersForMediaUploadMedia.md)
- [MessagePollResults](docs/Model/MessagePollResults.md)
- [MessagePropsAudio](docs/Model/MessagePropsAudio.md)
- [MessagePropsDocument](docs/Model/MessagePropsDocument.md)
- [MessagePropsGif](docs/Model/MessagePropsGif.md)
- [MessagePropsImageOrVideo](docs/Model/MessagePropsImageOrVideo.md)
- [MessagePropsInteractive](docs/Model/MessagePropsInteractive.md)
- [MessagePropsInteractiveBody](docs/Model/MessagePropsInteractiveBody.md)
- [MessagePropsInteractiveFooter](docs/Model/MessagePropsInteractiveFooter.md)
- [MessagePropsInteractiveHeader](docs/Model/MessagePropsInteractiveHeader.md)
- [MessagePropsLinkPreview](docs/Model/MessagePropsLinkPreview.md)
- [MessagePropsPoll](docs/Model/MessagePropsPoll.md)
- [MessagePropsSticker](docs/Model/MessagePropsSticker.md)
- [MessagePropsText](docs/Model/MessagePropsText.md)
- [MessagePropsVoice](docs/Model/MessagePropsVoice.md)
- [MessageReaction](docs/Model/MessageReaction.md)
- [MessageSource](docs/Model/MessageSource.md)
- [MessageType](docs/Model/MessageType.md)
- [MessageUpdate](docs/Model/MessageUpdate.md)
- [MessagesList](docs/Model/MessagesList.md)
- [MobileLoginMethod](docs/Model/MobileLoginMethod.md)
- [MobileLoginStatus](docs/Model/MobileLoginStatus.md)
- [MobileLoginStatusPhoneNumber](docs/Model/MobileLoginStatusPhoneNumber.md)
- [NewGroup](docs/Model/NewGroup.md)
- [Newsletter](docs/Model/Newsletter.md)
- [NewslettersList](docs/Model/NewslettersList.md)
- [NewslettersListPaged](docs/Model/NewslettersListPaged.md)
- [OrderItems](docs/Model/OrderItems.md)
- [Paging](docs/Model/Paging.md)
- [Participant](docs/Model/Participant.md)
- [ParticipantEvent](docs/Model/ParticipantEvent.md)
- [Participants](docs/Model/Participants.md)
- [PatchChatRequest](docs/Model/PatchChatRequest.md)
- [PollResults](docs/Model/PollResults.md)
- [Presence](docs/Model/Presence.md)
- [Product](docs/Model/Product.md)
- [ProductCreate](docs/Model/ProductCreate.md)
- [ProductEdit](docs/Model/ProductEdit.md)
- [ProductItem](docs/Model/ProductItem.md)
- [ProductsList](docs/Model/ProductsList.md)
- [QR](docs/Model/QR.md)
- [QRParameters](docs/Model/QRParameters.md)
- [ReactToMessage](docs/Model/ReactToMessage.md)
- [RequestMobileLogin](docs/Model/RequestMobileLogin.md)
- [ResponseError](docs/Model/ResponseError.md)
- [ResponseListParticipants](docs/Model/ResponseListParticipants.md)
- [ResponseSuccess](docs/Model/ResponseSuccess.md)
- [SectionList](docs/Model/SectionList.md)
- [SectionListList](docs/Model/SectionListList.md)
- [SectionListListSectionsInner](docs/Model/SectionListListSectionsInner.md)
- [SendMePresenceRequest](docs/Model/SendMePresenceRequest.md)
- [SendMedia](docs/Model/SendMedia.md)
- [SendMediaMedia](docs/Model/SendMediaMedia.md)
- [SendPresenceRequest](docs/Model/SendPresenceRequest.md)
- [Sender](docs/Model/Sender.md)
- [SenderAudio](docs/Model/SenderAudio.md)
- [SenderCatalogByID](docs/Model/SenderCatalogByID.md)
- [SenderContact](docs/Model/SenderContact.md)
- [SenderContactFromPhonebook](docs/Model/SenderContactFromPhonebook.md)
- [SenderContactList](docs/Model/SenderContactList.md)
- [SenderDocument](docs/Model/SenderDocument.md)
- [SenderGif](docs/Model/SenderGif.md)
- [SenderGroupInviteByCode](docs/Model/SenderGroupInviteByCode.md)
- [SenderImage](docs/Model/SenderImage.md)
- [SenderInteractive](docs/Model/SenderInteractive.md)
- [SenderLinkPreview](docs/Model/SenderLinkPreview.md)
- [SenderLiveLocation](docs/Model/SenderLiveLocation.md)
- [SenderLocation](docs/Model/SenderLocation.md)
- [SenderMedia](docs/Model/SenderMedia.md)
- [SenderNewsletterInviteByCode](docs/Model/SenderNewsletterInviteByCode.md)
- [SenderPoll](docs/Model/SenderPoll.md)
- [SenderProductFromCatalog](docs/Model/SenderProductFromCatalog.md)
- [SenderShort](docs/Model/SenderShort.md)
- [SenderSticker](docs/Model/SenderSticker.md)
- [SenderStories](docs/Model/SenderStories.md)
- [SenderStoriesAudio](docs/Model/SenderStoriesAudio.md)
- [SenderStoriesMedia](docs/Model/SenderStoriesMedia.md)
- [SenderStoriesText](docs/Model/SenderStoriesText.md)
- [SenderText](docs/Model/SenderText.md)
- [SenderVideo](docs/Model/SenderVideo.md)
- [SenderVoice](docs/Model/SenderVoice.md)
- [SentMessage](docs/Model/SentMessage.md)
- [Settings](docs/Model/Settings.md)
- [Size](docs/Model/Size.md)
- [Star](docs/Model/Star.md)
- [Status](docs/Model/Status.md)
- [StatusEnum](docs/Model/StatusEnum.md)
- [StatusesList](docs/Model/StatusesList.md)
- [UpdateGroupInfoRequest](docs/Model/UpdateGroupInfoRequest.md)
- [UpdateGroupSettingRequest](docs/Model/UpdateGroupSettingRequest.md)
- [UpdateSettings](docs/Model/UpdateSettings.md)
- [UploadMedia](docs/Model/UploadMedia.md)
- [UploadMediaResponse](docs/Model/UploadMediaResponse.md)
- [UserProfile](docs/Model/UserProfile.md)
- [UserProfileUpdate](docs/Model/UserProfileUpdate.md)
- [VCard](docs/Model/VCard.md)
- [ViewOnce](docs/Model/ViewOnce.md)
- [Webhook](docs/Model/Webhook.md)
- [WebhookEventType](docs/Model/WebhookEventType.md)
- [WebhookParameters](docs/Model/WebhookParameters.md)
- [WebhookPayload](docs/Model/WebhookPayload.md)
- [WebhookTestRequest](docs/Model/WebhookTestRequest.md)

## Authorization

Authentication schemes defined for the API:
### bearerAuth

- **Type**: Bearer authentication (token)

### tokenAuth

- **Type**: API key
- **API key parameter name**: token
- **Location**: URL query string


## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author

care@whapi.cloud

## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `1.8.7`
    - Generator version: `7.9.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
