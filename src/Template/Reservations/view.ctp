<section class="content-header">
  <h1>
    Reservation
    <small><?php echo __('View'); ?></small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="<?php echo $this->Url->build(['action' => 'index']); ?>"><i class="fa fa-dashboard"></i> <?php echo __('Home'); ?></a></li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="box box-solid">
        <div class="box-header with-border">
          <i class="fa fa-info"></i>
          <h3 class="box-title"><?php echo __('Information'); ?></h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <dl class="dl-horizontal">
            <dt scope="row"><?= __('Client') ?></dt>
            <dd><?= $reservation->has('client') ? $this->Html->link($reservation->client->name, ['controller' => 'Clients', 'action' => 'view', $reservation->client->id]) : '' ?></dd>
            <dt scope="row"><?= __('Destiny') ?></dt>
            <dd><?= $reservation->has('destiny') ? $this->Html->link($reservation->destiny->name, ['controller' => 'Destinies', 'action' => 'view', $reservation->destiny->id]) : '' ?></dd>
            <dt scope="row"><?= __('User') ?></dt>
            <dd><?= $reservation->has('user') ? $this->Html->link($reservation->user->name, ['controller' => 'Users', 'action' => 'view', $reservation->user->id]) : '' ?></dd>
            <dt scope="row"><?= __('Id') ?></dt>
            <dd><?= $this->Number->format($reservation->id) ?></dd>
            <dt scope="row"><?= __('Seat') ?></dt>
            <dd><?= $this->Number->format($reservation->seat) ?></dd>
            <dt scope="row"><?= __('Date') ?></dt>
            <dd><?= h($reservation->date) ?></dd>
            <dt scope="row"><?= __('Deadline') ?></dt>
            <dd><?= h($reservation->deadline) ?></dd>
          </dl>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-12">
      <div class="box box-solid">
        <div class="box-header with-border">
          <i class="fa fa-share-alt"></i>
          <h3 class="box-title"><?= __('Sales') ?></h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <?php if (!empty($reservation->sales)): ?>
          <table class="table table-hover">
              <tr>
                    <th scope="col"><?= __('Id') ?></th>
                    <th scope="col"><?= __('Reservation Id') ?></th>
                    <th scope="col"><?= __('People') ?></th>
                    <th scope="col"><?= __('Price') ?></th>
                    <th scope="col"><?= __('User Id') ?></th>
                    <th scope="col"><?= __('Client Id') ?></th>
                    <th scope="col" class="actions text-center"><?= __('Actions') ?></th>
              </tr>
              <?php foreach ($reservation->sales as $sales): ?>
              <tr>
                    <td><?= h($sales->id) ?></td>
                    <td><?= h($sales->reservation_id) ?></td>
                    <td><?= h($sales->people) ?></td>
                    <td><?= h($sales->price) ?></td>
                    <td><?= h($sales->user_id) ?></td>
                    <td><?= h($sales->client_id) ?></td>
                      <td class="actions text-right">
                      <?= $this->Html->link(__('View'), ['controller' => 'Sales', 'action' => 'view', $sales->id], ['class'=>'btn btn-info btn-xs']) ?>
                      <?= $this->Html->link(__('Edit'), ['controller' => 'Sales', 'action' => 'edit', $sales->id], ['class'=>'btn btn-warning btn-xs']) ?>
                      <?= $this->Form->postLink(__('Delete'), ['controller' => 'Sales', 'action' => 'delete', $sales->id], ['confirm' => __('Are you sure you want to delete # {0}?', $sales->id), 'class'=>'btn btn-danger btn-xs']) ?>
                  </td>
              </tr>
              <?php endforeach; ?>
          </table>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</section>
