<template>
    
<div class="layout-wrapper d-lg-flex">

            <!-- Start left sidebar-menu -->
            <div class="side-menu flex-lg-column mr-lg-1">
                <!-- LOGO -->
                <div class="navbar-brand-box">
                    <a href="index.html" class="logo logo-dark">
                        <span class="logo-sm">
                            <img src="assets/images/logo.svg" alt="" height="30">
                        </span>
                    </a>

                    <a href="index.html" class="logo logo-light">
                        <span class="logo-sm">
                            <img src="assets/images/logo.svg" alt="" height="30">
                        </span>
                    </a>
                </div>
                <!-- end navbar-brand-box -->

                <!-- Start side-menu nav -->
                <div class="flex-lg-column my-auto">
                    <ul class="nav nav-pills side-menu-nav justify-content-center" role="tablist">
                        <li class="nav-item" data-toggle="tooltip" data-trigger="hover" data-placement="top" title="Profile">
                            <a class="nav-link" id="pills-user-tab" data-toggle="pill" href="#pills-user" role="tab">
                                <i class="ri-user-2-line"></i>
                            </a>
                        </li>
                        <li class="nav-item" data-toggle="tooltip" data-trigger="hover" data-placement="top" title="Chats">
                            <a class="nav-link active" id="pills-chat-tab" data-toggle="pill" href="#pills-chat" role="tab">
                                <i class="ri-message-3-line"></i>
                            </a>
                        </li>
                        <li class="nav-item" data-toggle="tooltip" data-trigger="hover" data-placement="top" title="Groups">
                            <a class="nav-link" id="pills-groups-tab" data-toggle="pill" href="#pills-groups" role="tab">
                                <i class="ri-group-line"></i>
                            </a>
                        </li>
                        <li class="nav-item" data-toggle="tooltip" data-trigger="hover" data-placement="top" title="Contacts">
                            <a class="nav-link" id="pills-contacts-tab" data-toggle="pill" href="#pills-contacts" role="tab">
                                <i class="ri-contacts-line"></i>
                            </a>
                        </li>
                        <li class="nav-item" data-toggle="tooltip" data-trigger="hover" data-placement="top" title="Settings">
                            <a class="nav-link" id="pills-setting-tab" data-toggle="pill" href="#pills-setting" role="tab">
                                <i class="ri-settings-2-line"></i>
                            </a>
                        </li>
                        <li class="nav-item dropdown profile-user-dropdown d-inline-block d-lg-none">
                            <a class="nav-link dropdown-toggle" href="javascript: void(0);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img src="assets/images/users/avatar-1.jpg" alt="" class="profile-user rounded-circle">
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Profile <i class="ri-profile-line float-right text-muted"></i></a>
                                <a class="dropdown-item" href="#">Setting <i class="ri-settings-3-line float-right text-muted"></i></a>
                                <div class="dropdown-divider"></div>
                                <!-- <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                     Log out <i class="ri-logout-circle-r-line float-right text-muted"></i>
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                      style="display: none;">
                                    @csrf
                                </form> -->
                            </div>
                        </li>
                    </ul>
                </div>
                <!-- end side-menu nav -->

                <div class="flex-lg-column d-none d-lg-block">
                    <ul class="nav side-menu-nav justify-content-center">
                        <li class="nav-item">
                            <a class="nav-link" id="light-dark" href="#" data-toggle="tooltip" data-trigger="hover" data-placement="right" title="Dark / Light Mode">
                                <i class="ri-sun-line theme-mode-icon"></i>
                            </a>
                        </li>

                        <li class="nav-item btn-group dropup profile-user-dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img :src="'storage/uploads/profiles/' + auth.profile_pic" alt="" class="profile-user rounded-circle">
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Profile <i class="ri-profile-line float-right text-muted"></i></a>
                                <a class="dropdown-item" href="#">Setting <i class="ri-settings-3-line float-right text-muted"></i></a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Log out <i class="ri-logout-circle-r-line float-right text-muted"></i></a>
                            </div>
                        </li>
                    </ul>
                </div>
                <!-- Side menu user -->
            </div>
            <!-- end left sidebar-menu -->

            <!-- start chat-leftsidebar -->
            <div class="chat-leftsidebar mr-lg-1">

                <div class="tab-content">

                    <!-- Start chats tab-pane -->
                    <div class="tab-pane fade show active" id="pills-chat" role="tabpanel" aria-labelledby="pills-chat-tab">
                        <!-- Start chats content -->
                        <div>
                            <div class="px-4 pt-4">
                                <h4 class="mb-4">Chats</h4>
                                <div class="search-box chat-search-box">
                                    <div class="input-group mb-3 bg-light  input-group-lg rounded-lg">
                                        <div class="input-group-prepend">
                                            <button class="btn btn-link text-muted pr-1 text-decoration-none" type="button">
                                                <i class="ri-search-line search-icon font-size-18"></i>
                                            </button>
                                        </div>
                                        <input type="text" class="form-control bg-light" placeholder="Search messages or users">
                                    </div> 
                                </div> <!-- Search Box-->
                            </div> <!-- .p-4 -->

                            <!-- Start chat-message-list -->
                            <div class="px-2">
                                <h5 class="mb-3 px-3 font-size-16">Users</h5>

                                <div class="chat-message-list" data-simplebar>
            
                                    <ul class="list-unstyled chat-list chat-user-list">
                                  
                                        <li v-for="user in users" :key="user.index" @click="selectUser(user)"
                                            :class="{ 'active':user.selected }">
                                            <a href="#">
                                                <div class="media">
                                                    <div :class="[activeUsers.map(u => u.id).includes(user.id) ? 'online' : 'away', 'chat-user-img', 'align-self-center', 'mr-3']">
                                                        <img :src="'storage/uploads/profiles/' + user.profile_pic" class="rounded-circle avatar-xs" alt="">
                                                        <span class="user-status"></span>
                                                    </div>
                                                    <div class="media-body overflow-hidden">
                                                        <h5 class="text-truncate font-size-15 mb-1">{{ user.name }}</h5>
                                                    </div>
                                                    <div class="font-size-11">12 min</div>
    
                                                    <div v-if="user.unseen_msg_cnt && user.unseen_msg_cnt > 0" class="unread-message">
                                                        <span class="badge badge-soft-danger badge-pill">{{ user.unseen_msg_cnt }}</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                
                                    </ul>
                                </div>

                                <!-- <picker v-if="emoStatus" set="emojione" @select="onInput" title="Pick your emoji" /> -->
        
                            </div>
                            <!-- End chat-message-list -->
                        </div>
                        <!-- Start chats content -->
                    </div>
                    <!-- End chats tab-pane -->
                    
                </div>
                <!-- end tab content -->

            </div>
            <!-- end chat-leftsidebar -->

            <!-- Start User chat -->
            <div class="user-chat w-100">
                <div class="d-lg-flex">

                    <!-- start chat conversation section -->
                    <div class="w-100" v-if="chatWith">
                        <div class="p-3 p-lg-4 border-bottom">
                            <div class="row align-items-center">
                                <div class="col-sm-4 col-8">
                                    <div class="media align-items-center">
                                        <div class="d-block d-lg-none mr-2">
                                            <a href="javascript: void(0);" class="user-chat-remove text-muted font-size-16 p-2"><i class="ri-arrow-left-s-line"></i></a>
                                        </div>
                                        <div class="mr-3">
                                            <img :src="avatar" class="rounded-circle avatar-xs" alt="">
                                        </div>
                                        <div class="media-body overflow-hidden">
                                            <h5 class="font-size-16 mb-0 text-truncate"><a href="#" class="text-reset user-profile-show">{{ chatWith.name }}</a> <i class="ri-record-circle-fill font-size-10 text-success d-inline-block ml-1"></i></h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-8 col-4">
                                    <ul class="list-inline user-chat-nav text-right mb-0">
                                        
                                        <li class="list-inline-item">
                                            <div class="dropdown">
                                                <button class="btn nav-btn dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="ri-search-line"></i>
                                                </button>
                                                <div class="dropdown-menu p-0 dropdown-menu-right dropdown-menu-md">
                                                    <div class="search-box p-2">
                                                        <input type="text" class="form-control bg-light border-0" placeholder="Search...">
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
    
                                        <li class="list-inline-item d-none d-lg-inline-block">
                                            <button type="button" class="btn nav-btn user-profile-show">
                                                <i class="ri-user-2-line"></i>
                                            </button>
                                        </li>
    
                                        <li class="list-inline-item">
                                            <div class="dropdown">
                                                <button class="btn nav-btn dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="ri-more-fill"></i>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item d-block d-lg-none user-profile-show" href="#">View profile <i class="ri-user-2-line float-right text-muted"></i></a>
                                                    <a class="dropdown-item" href="#">Archive <i class="ri-archive-line float-right text-muted"></i></a>
                                                    <a class="dropdown-item" href="#">Muted <i class="ri-volume-mute-line float-right text-muted"></i></a>
                                                    <a class="dropdown-item" href="#">Delete <i class="ri-delete-bin-line float-right text-muted"></i></a>
                                                </div>
                                            </div>
                                        </li>
                                        
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- end chat user head -->
    
                        <!-- start chat conversation -->
                        <div class="chat-conversation p-3 p-lg-4" data-simplebar="init">
                            <ul class="list-unstyled mb-0">

                                <component :key="Math.random().toString()" v-for="message in messageList"
                                   :is="message.componentName"
                                   :data="message.body">

                                </component>

                                <li class="right" v-if="typingUser">
                                    <div class="conversation-list">
                                        <div class="chat-avatar">
                                            <img src="assets/images/users/avatar-4.jpg" alt="">
                                        </div>
                                        
                                        <div class="user-chat-content">
                                            <div class="ctext-wrap">
                                                <div class="ctext-wrap-content">
                                                    <p class="mb-0">
                                                        typing
                                                        <span class="animate-typing">
                                                            <span class="dot"></span>
                                                            <span class="dot"></span>
                                                            <span class="dot"></span>
                                                        </span>
                                                    </p>
                                                </div>
                                            </div>
        
                                            <div class="conversation-name">{{ typingUser.name }}</div>
                                        </div>
                                        
                                    </div>
                                </li>
                                
                            </ul>

                            <!-- Emoji display -->
                            <!-- <div v-if="emoStatus" style="position: relative; width:300px; height:300px;">
                                <picker set="emojione" @select="onInput" title="Pick your emoji" />
                            </div> -->
                            <!-- end emoji -->
                        </div>
                        <!-- end chat conversation end -->
    
                        <!-- start chat input section -->
                        <div class="p-3 p-lg-4 border-top mb-0">
                            <div class="row no-gutters">
                                    <div class="col">
                                        <div>
                                            <input type="text" v-model="messageContent" @keyup.enter="sendMessage()" @keydown="sendTypingEvent" class="form-control form-control-lg bg-light border-light" placeholder="Enter Message...">
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <div class="chat-input-links ml-md-2">
                                            <ul class="list-inline mb-0">
                                                <li class="list-inline-item">
                                                    <button type="button" @click="openSideEmo()" class="btn btn-link text-decoration-none font-size-16 btn-lg waves-effect" title="Emoji">
                                                        <i class="ri-emotion-happy-line"></i>
                                                    </button>
                                                </li>
                                                <li class="list-inline-item">  
                                                    <button style="margin-top:8px;" type="button" class="btn btn-link text-decoration-none font-size-16 btn-lg waves-effect" data-toggle="tooltip" data-placement="top" title="Attached File">
                                                        <file-upload
                                                            ref="upload"
                                                            :post-action="'message/store/'+chatWith.id"
                                                            @input-file="$refs.upload.active = true"
                                                            :headers="{'X-CSRF-TOKEN': token}"
                                                        >
                                                            <i class="ri-attachment-line"></i>
                                                        </file-upload>
                                                    </button>
                                                    
                                                </li>
                                                <li class="list-inline-item">
                                                    <button type="submit" @click="sendMessage()" class="btn btn-primary font-size-16 btn-lg chat-send waves-effect waves-light">
                                                        <i class="ri-send-plane-2-fill"></i>
                                                    </button>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                            </div>
                        </div>
                        <!-- end chat input section -->
                    </div>
                    <!-- end chat conversation section -->

                    <div class="w-100" v-else>
                        <div class="text-center mt-5 pt-sm-5">
                            <p>Click on a user to</p>
                            <h1>Start a conversation.</h1>
                        </div>
                    </div>





                    <!-- start User profile detail sidebar -->
                    <div class="user-profile-sidebar">
                        <div class="px-3 px-lg-4 pt-3 pt-lg-4">
                            <div class="user-chat-nav text-right">
                                <button type="button" @click="closeSideEmo()" class="btn nav-btn" id="user-profile-hide">
                                    <i class="ri-close-line"></i>
                                </button>
                            </div>
                        </div>

                        <div class="text-center p-2 border-bottom">
                            <picker set="emojione" @select="onInput" title="Pick your emoji" />
                        </div>
                        <!-- End profile user -->

                    </div>
                    <!-- end User profile detail sidebar -->






                </div>
            </div>
            <!-- End User chat -->
        </div>
        <!-- end  layout wrapper -->



</template>

<script>
    import myMessage from "./myMessage";
    import guestMessage from "./guestMessage";
    import axios from 'axios';
    import { Picker } from 'emoji-mart-vue';

    export default {
        components: {
            myMessage,
            guestMessage,
            Picker
        },
        props: ['auth'],
        data() {
            return {
                avatar: '',
                messageList: [], // { body , componentName }
                messageContent: "",
                users: [],
                chatWith: null, // user
                activeUsers: [],
                notificationsSounds: ['slack.mp3', 'messenger.mp3', 'sound1.mp3'],
                typingUser: null,
                isTyping: false,
                token: $('meta[name="csrf-token"]').attr('content'),
                emoStatus: false
            }
        },
        mounted() {
            this.scrollToBottom()
            this.getUsers()

            window.Echo.join(`App.User.${this.auth.id}`).listen('SendMessage', (event) => {
                if (this.chatWith && event.message.sender_id == this.chatWith.id) {
                    console.log("listener");
                    console.log(event);
                    // User A , B , C -- if B send to A # B -> A
                    // it will appear that C and B send the same message to A # B -> A & C -> A
                    // this if statement avoid this # only B -> A
                    this.messageList.push({
                        body: {
                            content: event.message.content,
                            image: event.message.image,
                            created_at: event.message.created_at,
                            userName: this.auth.name
                        },
                        componentName: 'guestMessage',
                    })
                }
                this.incrementUnseenMessagesCount(event.message.sender_id)
                this.fireNotification()
            }).listenForWhisper('typing', user => {
                this.typingUser = user;

                setTimeout(() => {
                    this.typingUser =  null;

                }, 1500);
            })

            window.Echo.join('chat')
                .here(activeUsers => {
                    this.activeUsers = activeUsers
                })
                .joining(user => {
                    this.activeUsers.push(user)
                })
                .leaving(user => {
                    this.activeUsers = this.activeUsers.filter(u => u.id != user.id);
                })


        },
        updated() {
            this.scrollToBottom()
        },
        methods: {
            openSideEmo() {
                $(".user-profile-sidebar").show();
                
            },
            closeSideEmo() {
                $(".user-profile-sidebar").hide();
            },
            onInput(e) {
                if(!e) return false;
                
                if (!this.messageContent) {
                    this.messageContent = e.native;
                } else {
                    this.messageContent = this.messageContent + e.native;
                }
                
            },

            sendMessage() {
                if (!this.messageContent) return
                this.messageList.push({
                    body: {
                        content: this.messageContent,
                        created_at: this.current_date,
                        userName: this.chatWith.name
                    },
                    componentName: 'myMessage',
                })
                axios.post(`message/store/${this.chatWith.id}`, {content: this.messageContent});
                this.messageContent = ""
                this.markMessagesSeen(this.chatWith)
            },
            scrollToBottom() {
                if ($(".direct-chat-messages")[0])
                    $('.direct-chat-messages').scrollTop($(".direct-chat-messages")[0].scrollHeight);
            },
            getUsers() {
                axios.get('/user').then(response => {
                    this.users = response.data;
                })
            },
            selectUser(user) {
                this.chatWith = user;
                this.avatar = 'storage/uploads/profiles/' + this.chatWith.profile_pic;
                // get messages between auth and user
                axios.get(`user/messages_between/${user.id}`).then(response => {
                    this.messageList = []
                    response.data.forEach(message_i => {
                        this.messageList.push({
                            body: {
                                content: message_i.content,
                                created_at: message_i.created_at,
                                image: message_i.image,
                                userName: message_i.sender_id == this.auth.id ? this.auth.name : this.chatWith.name,
                            },
                            componentName: message_i.sender_id == this.auth.id ? 'myMessage' : 'guestMessage',
                        })
                    })
                })

                // mark the selected user
                this.users.forEach((user_i, index) => {
                    if (user_i.id == user.id)
                        this.users[index].selected = true
                    else
                        this.users[index].selected = false
                })

                this.markMessagesSeen(user)
            },
            markMessagesSeen(user) {
                this.users.every((user_i, index) => {
                    if (user_i.id == user.id) {
                        this.users[index].unseen_msg_cnt = 0
                        return false
                    }
                    return true
                })
            },
            incrementUnseenMessagesCount(sender_id) {
                this.users.forEach((user_i, index) => {
                    if (user_i.id == sender_id) {
                        this.users[index].unseen_msg_cnt++
                        return false
                    }
                    return true
                })
            },
            sendTypingEvent() {
                Echo.join(`App.User.${this.chatWith.id}`)
                    .whisper('typing', this.auth);
            },
            fireNotification() {
                const sound = this.notificationsSounds[Math.floor(Math.random() * this.notificationsSounds.length)];
                let src = `/sounds/slack.mp3`;
                let audio = new Audio(src);
                audio.play();
            }
        },
        computed: {
            current_date() {
                let today = new Date();
                let date = today.getFullYear() + '-' + (today.getMonth() + 1) + '-' + today.getDate();
                let time = today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();
                return date + ' ' + time;
            }
        }
    }
</script>
