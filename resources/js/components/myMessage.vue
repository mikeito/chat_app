<template>
  <!-- <div class="direct-chat-msg right">
        <div class="direct-chat-infos clearfix">
            <span class="direct-chat-name float-right">{{ data.userName }}</span>
            <span class="direct-chat-timestamp float-left">{{ data.created_at }}</span>
        </div>
        <img class="direct-chat-img" src="images/user3-128x128.jpg"
             alt="message user image">
        <div class="direct-chat-text">
           {{ data.content }}
        </div>
  </div>-->

  <div>
    <li>
    <div class="conversation-list">
      <div class="chat-avatar">
        <img src="assets/images/users/avatar-4.jpg" alt />
      </div>

      <div class="user-chat-content">
        <div class="ctext-wrap">
          <div v-if="data.content" class="ctext-wrap-content">
            <p class="mb-0">{{ data.content }}</p>
            <p class="chat-time mb-0">
              <i class="ri-time-line align-middle"></i>
              <span class="align-middle">{{ data.created_at | moment }}</span>
            </p>
          </div>


          <div v-else class="ctext-wrap-content">
            <ul class="list-inline message-img  mb-0">
                <li class="list-inline-item message-img-list">
                    <div>
                        <a class="popup-img d-inline-block m-1" :href="'storage/uploads/profiles/' + data.image" title="Project 1">
                            <img :src="'storage/uploads/profiles/' + data.image" alt="" class="rounded border">
                        </a>
                    </div>
                    <!-- <div class="message-img-link">
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item">
                                <a href="#">
                                    <i class="ri-download-2-line"></i>
                                </a>
                            </li>
                            <li class="list-inline-item dropdown">
                                <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="ri-more-fill"></i>
                                </a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Copy <i class="ri-file-copy-line float-right text-muted"></i></a>
                                    <a class="dropdown-item" href="#">Save <i class="ri-save-line float-right text-muted"></i></a>
                                    <a class="dropdown-item" href="#">Forward <i class="ri-chat-forward-line float-right text-muted"></i></a>
                                    <a class="dropdown-item" href="#">Delete <i class="ri-delete-bin-line float-right text-muted"></i></a>
                                </div>
                            </li>
                        </ul>
                    </div> -->
                </li>
            </ul>
            <p class="chat-time mb-0"><i class="ri-time-line align-middle"></i> <span class="align-middle">10:09</span></p>
        </div>




          <div class="dropdown align-self-start">
            <a
              class="dropdown-toggle"
              href="#"
              role="button"
              data-toggle="dropdown"
              aria-haspopup="true"
              aria-expanded="false"
            >
              <i class="ri-more-2-fill"></i>
            </a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="#">
                Copy
                <i class="ri-file-copy-line float-right text-muted"></i>
              </a>
              <a class="dropdown-item" href="#">
                Save
                <i class="ri-save-line float-right text-muted"></i>
              </a>
              <a class="dropdown-item" href="#">
                Forward
                <i class="ri-chat-forward-line float-right text-muted"></i>
              </a>
              <a class="dropdown-item" href="#">
                Delete
                <i class="ri-delete-bin-line float-right text-muted"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="conversation-name">{{ data.userName }}</div>
      </div>
    </div>
  </li>
  </div>
</template>

<script>
import moment from 'moment';

export default {
  name: "myMessage",
  props: {
    data: {
      type: Object,
      default: function () {
        return {
          content: "this is Message Content",
          userName: "User Name",
          created_at: "Created At",
          image: "file here"
        };
      },
    },
  },
  filters: {
    moment: function (date) {
      return moment(date).fromNow();
    }
  }
};
</script>

