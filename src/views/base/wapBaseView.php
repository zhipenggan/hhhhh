
<div class="wrapper-mask" id="wrapper-mask"></div>
<div class="wrapper" id="wrapper" >
    <div class="left-body">
<!--        <div class="search_group_friend">-->
<!--            <div style="width: 90%;">-->
<!--                <img src="--><?php //echo $siteAddress?><!--/public/img/msg/search_icon.png">-->
<!--                <input type="text" onkeydown="searchGroupAndFriendByKeyDown(event)" class="search_for_group_friend">-->
<!--                <img src="--><?php //echo $siteAddress?><!--/public/img/msg/btn-x.png" style="left:90%;top:2.2rem;" onclick="deleteSearchInfo()">-->
<!--            </div>-->
<!--        </div>-->
        <div class="top_bar" style="background: #0d0d0d;position: fixed;top: 0;height: 40px;width: 100%;color: #FFFFFF;display: block">

            <div id="top_bar">
                <span style="font-size: 20px;margin-top: 5px;margin-left:10px;display: inline-flex">
                 <?php if ($siteLogo):?>
                     <img class="mobile_logo" src="<?php echo $siteLogo;?>" style="width: 30px;height:30px;margin-left: 10px;">
                 <?php else:?>
                     <img class="mobile_logo" src="./public/img/login/mobile_logo.png" style="width: 30px;height:30px;margin-left: 10px;padding-right: 5px;">
                 <?php endif;?>
                    <?php echo $siteName;?></span>

                <div  onclick="logout(event)" style="float: right;margin-right: 10px;margin-top: 10px;">退出</div>
            </div>


            <div style="width: 100%;display: none" class="home-tools" >
                <div class="" style="font-size: 14px;color: #ffffff; margin: 14px 0 6px 20px;float: left;" id="show_program_bar">
                    <span data-local-value="miniProgramTip">小程序列表</span>
                    <i class="down" id="show_program"></i><i class="up" id="hide_program" style="display: none"></i>
                </div>
                <div  onclick="logout(event)" style="float: right;margin-right: 10px;margin-top: 10px;">退出</div>
            </div>


        </div>


        <div class="left-body-container">

            <!-- home -->
            <div class="left-body-home home-page left-body-item" style="position: absolute;top: 0;display: none;background: black;">


                <div style="position: relative;margin:0 auto;background-color: white;border: 1px solid grey;width: 300px;" id="program_list">
                    <div style="display: block;position: absolute;width: 0;height: 0;border: 8px solid transparent;top: -17px;left: 20px;"></div>
                    <div class="mini-program-row" style="display: block;border-bottom-color: white;" id="program-row-list">


                    </div>
                </div>
            </div>

            <!-- chats -->

            <div class="left-body-chatsession chatsession-lists left-body-item" style="position: absolute;">
            </div>

            <!-- groups -->
            <div class="left-body-groups group-lists left-body-item"  style="display: none;position: fixed;">
                <div style="width: 100%;" class="group-tools">
                    <div class="pw-contact-row create-group" >
                        <div class="pw-contact-row-image" style="">
                            <img src="<?php echo $siteAddress?>/public/img/msg/create_group.png" />
                        </div>
                        <div class="pw-contact-row-name" data-local-value="createGroupTip">创建群聊</div>
                    </div>
                    <div class="group-list-div"><span  data-local-value="groupListTip">群聊列表</span><span style="margin-left: 0.5rem;" class="group-count"></span></div>
                </div>
                <div>
                    <div class="group-list-contact-row" style="overflow-y: scroll;">
                    </div>
                </div>
            </div>

            <!-- friends -->
            <div class="left-body-friends friend-lists left-body-item"  style="display: none;position: fixed;">
                <div style="width: 100%;" class="friend-tools">
                    <div class="pw-contact-row  search-user" >
                        <div class="pw-contact-row-image" style="">
                            <img src="<?php echo $siteAddress?>/public/img/msg/search_add_friend.png" />
                        </div>
                        <div class="pw-contact-row-name" data-local-value="searchTip">添加好友</div>
                    </div>
                    <div class="pw-contact-row  apply-friend-list" >
                        <div class="pw-contact-row-image" style="">
                            <img src="<?php echo $siteAddress?>/public/img/msg/apply_list.png" />
                        </div>

                        <div class="pw-contact-row-name new-friends-apply" data-local-value="newFriendsTip">新朋友</div>
                        <div  class="apply-friend-list apply_friend_num" style="display: none;" ></div>
                    </div>
                    <div class="friend-list-div" ><span data-local-value="friendListTip">好友列表</span><span style="margin-left: 0.5rem;" class="friend-count"><span></div>
                </div>
                <div style="">
                    <div class="friend-list-contact-row" style="overflow-y: scroll;">
                    </div>
                </div>
            </div>


            <!-- search friends -->
            <div class="left-body-search-list search-friend-group-lists left-body-item"  style="display: none;">
                <div class="search-friend-group-lists-div" style="width: 28.14rem;position: absolute;margin:0 auto;height: 100%;">
                    <div class="search-list-contact-row" style="overflow-y: scroll;position: absolute">
                        <div class="search-friend-div">
                            <div class="friend-list-div" ><span data-local-value="friendListTip">好友</span></div>
                            <div class="search_display_friend">
                            </div>
                            <div class="search_see_friend_all_tip display_all_friend" style="display: none" >
                                <span>查看全部</span> <span class="search_friend_count"></span>
                            </div>
                            <div class="search_hidden_friend" style="display: none">
                            </div>
                            <div class="search_see_friend_all_tip hide_all_friend" style="display: none" >
                                <span>收起</span>
                            </div>
                        </div>

                        <div class="search-group-div">
                            <div class="group-list-div" ><span data-local-value="GroupListTip">群组</span></div>
                            <div class="search_display_group">
                            </div>
                            <div class="search_see_group_all_tip display_all_group" style="display: none" >
                                <span>查看全部</span> <span class="search_group_count"></span>
                            </div>
                            <div class="search_hidden_group" style="display: none">
                            </div>
                            <div class="search_see_group_all_tip hide_all_group" style="display: none" >
                                <span>收起</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="layout" >
        <div class="left-sidebar">
            <div id="bottom-sidebars" class="bottom-sidebar">
                <!--     home     -->
                <div class="hint--bottom" aria-label="主页" data-local="aria-label:homeTip">
                    <div class="l-sb-item " data="home">
                        <img src="<?php echo $siteAddress?>/public/img/msg/home_icon.png" data="unselect" class="home-unselect item-img"/>
                        <img src="<?php echo $siteAddress?>/public/img/msg/home_icon_select.png" data="select" class="home-select item-img"
                             style="display: none;"/>
                    </div>
                </div>
                <!--     chats     -->
                <div class="hint--bottom"  aria-label="消息" data-local="aria-label:chatSessionTip">
                    <div class="l-sb-item l-sb-item-active" data="chatSession" >
                        <img src="<?php echo $siteAddress?>/public/img/msg/chatsession.png" data="select" class="chatSession-select item-img "/>
                        <img src="<?php echo $siteAddress?>/public/img/msg/chatsession_unselect.png" data="unselect" class="chatSession-unselect  item-img" style="display: none;"/>
                        <div style="display: none" class="room-list-msg-unread unread-num"></div>
                        <div style="display: none"  class="room-list-msg-unread-mute unread-num-mute"></div>
                    </div>
                </div>
                <!--     groups     -->
                <div class=" hint--bottom"  aria-label="群聊" data-local="aria-label:groupTip">
                    <div class="l-sb-item "  data="group" >
                        <img src="<?php echo $siteAddress?>/public/img/msg/group_chat_unselect.png" data="unselect" class="group-unselect item-img" />
                        <img src="<?php echo $siteAddress?>/public/img/msg/group_chat.png" data="select" class="group-select item-img" style="display: none;"/>
                    </div>
                </div>
                <!--     friends     -->
                <div class=" hint--bottom"  aria-label="好友" data-local="aria-label:friendTip">
                    <div class="l-sb-item"  data="friend" >
                        <img src="<?php echo $siteAddress?>/public/img/msg/friend_unselect.png" data="unselect" class="friend-unselect item-img" />
                        <img src="<?php echo $siteAddress?>/public/img/msg/friend.png" data="select" class="friend-select item-img" style="display: none;"/>
                        <div style="display: none" class="apply-friend-list apply_friend_list_num" style="display: none;"></div>
                    </div>
                </div>
                <!--     more     -->
                <div class=" hint--bottom"  aria-label="更多" data-local="aria-label:moreTip">
                    <div class="l-sb-item"  data="more" >
                        <img src="<?php echo $siteAddress?>/public/img/msg/more_unselect.png" data="unselect" class="more-unselect item-img" />
                        <img src="<?php echo $siteAddress?>/public/img/msg/more.png" data="select" class="more-select item-img" style="display: none;"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>