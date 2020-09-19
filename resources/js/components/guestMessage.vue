<template>
  <!-- <div class="direct-chat-msg">
        <div class="direct-chat-infos clearfix">
            <span class="direct-chat-name float-left">{{ data.userName }}</span>
            <span class="direct-chat-timestamp float-right">{{ data.created_at }}</span>
        </div>
        <img class="direct-chat-img" src="images/user1-128x128.jpg"
             alt="message user image">
        <div class="direct-chat-text">
            {{ data.content }}
        </div>
  </div>-->

  <li class="right">
    <div class="conversation-list">
      <div class="chat-avatar">
        <img src="assets/images/users/avatar-1.jpg" alt />
      </div>

      <div class="user-chat-content">
        <div class="ctext-wrap">
          <div class="ctext-wrap-content">
            <p class="mb-0">{{ data.content }}</p>
            <p class="chat-time mb-0">
              <i class="ri-time-line align-middle"></i>
              <span class="align-middle">{{ data.created_at | moment }}</span>
            </p>
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
</template>

<script>
import moment from 'moment';

export default {
  name: "guestMessage",
  props: {
    data: {
      type: Object,
      default: function () {
        return {
          content: "this is Message Content",
          userName: "User Name",
          created_at: "Created At",
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

<style scoped>
</style>
