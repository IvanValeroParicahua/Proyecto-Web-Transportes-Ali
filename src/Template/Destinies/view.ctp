<section class="content-header">
  <h1>
    Destiny
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
            <dt scope="row"><?= __('Name') ?></dt>
            <dd><?= h($destiny->name) ?></dd>
            <dt scope="row"><?= __('Id') ?></dt>
            <dd><?= $this->Number->format($destiny->id) ?></dd>
            <dt scope="row"><?= __('Status') ?></dt>
            <dd><?= $this->Number->format($destiny->status) ?></dd>
            <dt scope="row"><?= __('Price') ?></dt>
            <dd><?= $this->Number->format($destiny->price) ?></dd>
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
          <h3 class="box-title"><?= __('Reservations') ?></h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <?php if (!empty($destiny->reservations)): ?>
          <table class="table table-hover">
              <tr>
                    <th scope="col"><?= __('Id') ?></th>
                    <th scope="col"><?= __('Client Id') ?></th>
                    <th scope="col"><?= __('Date') ?></th>
                    <th scope="col"><?= __('Deadline') ?></th>
                    <th scope="col"><?= __('Seat') ?></th>
                    <th scope="col"><?= __('Destiny Id') ?></th>
                    <th scope="col"><?= __('User Id') ?></th>
                    <th scope="col" class="actions text-center"><?= __('Actions') ?></th>
              </tr>
              <?php foreach ($destiny->reservations as $reservations): ?>
              <tr>
                    <td><?= h($reservations->id) ?></td>
                    <td><?= h($reservations->client_id) ?></td>
                    <td><?= h($reservations->date) ?></td>
                    <td><?= h($reservations->deadline) ?></td>
                    <td><?= h($reservations->seat) ?></td>
                    <td><?= h($reservations->destiny_id) ?></td>
                    <td><?= h($reservations->user_id) ?></td>
                      <td class="actions text-right">
                      <?= $this->Html->link(__('View'), ['controller' => 'Reservations', 'action' => 'view', $reservations->id], ['class'=>'btn btn-info btn-xs']) ?>
                      <?= $this->Html->link(__('Edit'), ['controller' => 'Reservations', 'action' => 'edit', $reservations->id], ['class'=>'btn btn-warning btn-xs']) ?>
                      <?= $this->Form->postLink(__('Delete'), ['controller' => 'Reservations', 'action' => 'delete', $reservations->id], ['confirm' => __('Are you sure you want to delete # {0}?', $reservations->id), 'class'=>'btn btn-danger btn-xs']) ?>
                  </td>
              </tr>
              <?php endforeach; ?>
          </table>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="box box-solid">
        <div class="box-header with-border">
          <i class="fa fa-share-alt"></i>
          <h3 class="box-title"><?= __('Tickets') ?></h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <?php if (!empty($destiny->tickets)): ?>
          <table class="table table-hover">
              <tr>
                    <th scope="col"><?= __('Id') ?></th>
                    <th scope="col"><?= __('Document') ?></th>
                    <th scope="col"><?= __('Output') ?></th>
                    <th scope="col"><?= __('Destiny Id') ?></th>
                    <th scope="col"><?= __('Seat') ?></th>
                    <th scope="col"><?= __('User Id') ?></th>
                    <th scope="col"><?= __('Client Id') ?></th>
                    <th scope="col"><?= __('Bus Id') ?></th>
                    <th scope="col" class="actions text-center"><?= __('Actions') ?></th>
              </tr>
              <?php foreach ($destiny->tickets as $tickets): ?>
              <tr>
                    <td><?= h($tickets->id) ?></td>
                    <td><?= h($tickets->document) ?></td>
                    <td><?= h($tickets->output) ?></td>
                    <td><?= h($tickets->destiny_id) ?></td>
                    <td><?= h($tickets->seat) ?></td>
                    <td><?= h($tickets->user_id) ?></td>
                    <td><?= h($tickets->client_id) ?></td>
                    <td><?= h($tickets->bus_id) ?></td>
                      <td class="actions text-right">
                      <?= $this->Html->link(__('View'), ['controller' => 'Tickets', 'action' => 'view', $tickets->id], ['class'=>'btn btn-info btn-xs']) ?>
                      <?= $this->Html->link(__('Edit'), ['controller' => 'Tickets', 'action' => 'edit', $tickets->id], ['class'=>'btn btn-warning btn-xs']) ?>
                      <?= $this->Form->postLink(__('Delete'), ['controller' => 'Tickets', 'action' => 'delete', $tickets->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tickets->id), 'class'=>'btn btn-danger btn-xs']) ?>
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
