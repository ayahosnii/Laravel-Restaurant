<template>
    <li class="dropdown dropdown-notification nav-item">
        <a class="nav-link nav-link-label" href="#" data-toggle="dropdown">
            <i class="ficon ft-bell"></i>
            <span class="badge badge-pill badge-default badge-danger badge-default badge-up badge-glow"  v-if="unreadCount > 0">{{ unreadCount }}</span>
        </a>
        <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
            <li class="dropdown-menu-header">
                <h6 class="dropdown-header m-0">
                    <span class="grey darken-2">Notifications</span>
                </h6>
                <span
                    class="notification-tag badge badge-default badge-danger float-right m-0">5 New</span>
            </li>
            <li class="scrollable-container media-list w-100">
                <a href="javascript:void(0)" v-for="item in unread" :key="item.id" @click="readNotifications(item)">
                    <div class="media" v-if="unreadCount > 0">
                        <div class="media-left align-self-center"><i
                            class="ft-plus-square icon-bg-circle bg-cyan"></i></div>
                        <div class="media-body">
                            <h6 class="media-heading">You have new order!</h6>
                            <p class="notification-text font-small-3 text-muted">
                                product id =
                                {{ item.data.product_id}}
                                </p>
                            <small>
                                <time class="media-meta text-muted"
                                      datetime="2015-06-11T18:29:20+08:00">{{ item.data.created_at }} minutes ago
                                </time>
                            </small>
                        </div>
                    </div>
                </a>
                <a href="javascript:void(0)">
                    <div class="media">
                        <div class="media-left align-self-center"><i
                            class="ft-download-cloud icon-bg-circle bg-red bg-darken-1"></i></div>
                        <div class="media-body">
                            <h6 class="media-heading red darken-1">99% Server load</h6>
                            <p class="notification-text font-small-3 text-muted">Aliquam tincidunt
                                mauris eu risus.</p>
                            <small>
                                <time class="media-meta text-muted"
                                      datetime="2015-06-11T18:29:20+08:00">Five hour ago
                                </time>
                            </small>
                        </div>
                    </div>
                </a>
                <a href="javascript:void(0)">
                    <div class="media">
                        <div class="media-left align-self-center"><i
                            class="ft-alert-triangle icon-bg-circle bg-yellow bg-darken-3"></i>
                        </div>
                        <div class="media-body">
                            <h6 class="media-heading yellow darken-3">Warning notifixation</h6>
                            <p class="notification-text font-small-3 text-muted">Vestibulum auctor
                                dapibus neque.</p>
                            <small>
                                <time class="media-meta text-muted"
                                      datetime="2015-06-11T18:29:20+08:00">Today
                                </time>
                            </small>
                        </div>
                    </div>
                </a>
                <a href="javascript:void(0)">
                    <div class="media">
                        <div class="media-left align-self-center"><i
                            class="ft-check-circle icon-bg-circle bg-cyan"></i></div>
                        <div class="media-body">
                            <h6 class="media-heading">Complete the task</h6>
                            <small>
                                <time class="media-meta text-muted"
                                      datetime="2015-06-11T18:29:20+08:00">Last week
                                </time>
                            </small>
                        </div>
                    </div>
                </a>
                <a href="javascript:void(0)">
                    <div class="media">
                        <div class="media-left align-self-center"><i
                            class="ft-file icon-bg-circle bg-teal"></i></div>
                        <div class="media-body">
                            <h6 class="media-heading">Generate monthly report</h6>
                            <small>
                                <time class="media-meta text-muted"
                                      datetime="2015-06-11T18:29:20+08:00">Last month
                                </time>
                            </small>
                        </div>
                    </div>
                </a>
            </li>
            <li class="dropdown-menu-footer"><a class="dropdown-item text-muted text-center"
                                                href="javascript:void(0)">Read all notifications</a>
            </li>
        </ul>
    </li>
</template>

<script>

export default {
    data: function () {
        return {
            read: {},
            unread: {},
            unreadCount: 0
        }
    },
    created: function () {
        this.getNotifications();
        let adminId = $('meta[name="adminId"]').attr('content');
        Echo.private('App.Models.admin.Admin.' + adminId)
            .notification((notification) => {
                this.unread.unshift(notification);
                this.unreadCount++;
            });
    },
    methods: {
        getNotifications() {
            axios.get('/admin/notifications/get').then(res => {
                console.log(res);
                this.read = res.data.read;
                this.unread = res.data.unread;
                this.unreadCount = res.data.unread.length;
            }).catch(error => Exception.handle(error))
        },
        readNotifications(notification) {
            axios.post('/admin/notifications/read', {id: notification.id}).then(res => {
                this.unread.splice(notification,1);
                this.read.push(notification);
                this.unreadCount--;
            })
        }
    }
}
</script>
