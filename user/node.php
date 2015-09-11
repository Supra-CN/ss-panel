<?php
require_once '_main.php';
$node = new Ss\Node\Node();
?>

    <!-- =============================================== -->

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                站长共享的节点
                <small>Node List</small>
            </h1>
        </section>

        <!-- Main content -->
        <section class="content">
            <!-- START PROGRESS BARS -->
            <div class="row">
                <div class="col-md-6">
                    <div class="box box-solid">
                        <div class="box-header">
                            <i class="fa fa-th-list"></i>
                            <h3 class="box-title">节点</h3>
                        </div><!-- /.box-header -->
                        <div class="box-body">
                            <div class="callout callout-warning">
                                <h4>注意!</h4>
                                <p>这是站长自用的线路，剩余一部分流量共享出来；</p>
                                <p>美国sfo节点长期有效，由站长承担节点开销！</p>
                                <p>请勿在任何地方公开节点地址！</p>
                            </div><?php
                            $node0 = $node->NodesArray(0);
                            foreach($node0 as $row){
                                ?>
                                <div class="nav-tabs-custom">
                                    <ul class="nav nav-tabs pull-right">
                                        <li class="dropdown">
                                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                                操作 <span class="caret"></span>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li role="presentation"><a role="menuitem" target="_blank" tabindex="-1" href="node_json.php?id=<?php echo $row['id']; ?>">配置文件</a></li>
                                                <li role="presentation"><a role="menuitem" target="_blank" tabindex="-1" href="node_qr.php?id=<?php echo $row['id']; ?>">二维码</a></li>
                                            </ul>
                                        </li>
                                        <li class="pull-left header"><i class="fa fa-angle-right"></i> <?php echo $row['node_name']; ?></li>
                                    </ul>
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="tab_1-1">
                                            <p> <a class="btn btn-xs bg-purple btn-flat margin" href="#">地址:</a> <code><?php echo $row['node_server']; ?></code>
                                                <a class="btn btn-xs bg-orange btn-flat margin" href="#"><?php echo $row['node_status']; ?></a>
                                                <a class="btn btn-xs bg-green btn-flat margin" href="#"><?php echo $row['node_method']; ?></a>
                                            </p>
                                            <p> <?php echo $row['node_info']; ?></p>
                                        </div><!-- /.tab-pane -->
                                    </div><!-- /.tab-content -->
                                </div><!-- nav-tabs-custom -->
                            <?php }?>
                        </div><!-- /.box-body -->


                    </div><!-- /.box -->
                </div><!-- /.col (left) -->

                <div class="col-md-6">
                    <div class="box box-solid">
                        <div class="box-header">
                            <i class="fa fa-code"></i>
                            <h3 class="box-title">大家捐助的节点</h3>
                        </div><!-- /.box-header -->
                        <div class="box-body">
                            <div class="callout callout-warning">
                                <h4>注意!</h4>
                                <p>这是大家捐助的线路，对速度由要求的同学可以考虑使用新加坡节点；</p>
                                <p>每个节点每月开销成本是5美刀，大家每月的捐款够数就开服；</p>
			        <p><a class="btn btn-lg btn-success" href="http://donate.supra.tw" role="button">捐助节点,贡献自己的一份力量!</a></p>
                            </div><?php
                            $node1 = $node->NodesArray(1);
                            foreach($node1 as $row){
                                ?>
                                <div class="nav-tabs-custom">
                                    <ul class="nav nav-tabs pull-right">
                                        <li class="dropdown">
                                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                                操作 <span class="caret"></span>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li role="presentation"><a role="menuitem" target="_blank" tabindex="-1" href="node_json.php?id=<?php echo $row['id']; ?>">配置文件</a></li>
                                                <li role="presentation"><a role="menuitem" target="_blank" tabindex="-1" href="node_qr.php?id=<?php echo $row['id']; ?>">二维码</a></li>
                                            </ul>
                                        </li>
                                        <li class="pull-left header"><i class="fa fa-angle-right"></i> <?php echo $row['node_name']; ?></li>
                                    </ul>
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="tab_1-1">
                                            <p> <a class="btn btn-xs bg-purple btn-flat margin" href="#">地址:</a> <code><?php echo $row['node_server']; ?></code>
                                                <a class="btn btn-xs bg-orange btn-flat margin" href="#"><?php echo $row['node_status']; ?></a>
                                                <a class="btn btn-xs bg-green btn-flat margin" href="#"><?php echo $row['node_method']; ?></a>
                                            </p>
                                            <p> <?php echo $row['node_info']; ?></p>
                                        </div><!-- /.tab-pane -->
                                    </div><!-- /.tab-content -->
                                </div><!-- nav-tabs-custom -->
                            <?php }?>
                        </div><!-- /.box-body -->
                    </div><!-- /.box -->
                </div><!-- /.col (right) -->
                 
            </div><!-- /.row -->
            <!-- END PROGRESS BARS -->
        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->
<?php
require_once '_footer.php'; ?>
