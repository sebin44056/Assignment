<h1>Pizza Details</h1>
<link rel="stylesheet" href="../css/form.css" />
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Orders'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="orders form large-9 medium-8 columns content" id="main">
    <?= $this->Form->create($order) ?>
    <fieldset>
        <legend><?= __('Add Order') ?></legend>
        <?php
   
  
 
	
   echo $this->Form->label('Select crust type');
   
   $options1 = array(
	  'handtossed' => 'Hand-tossed',
      'pan' => 'Pan',
      'stuffed' => 'Stuffed',
	  'thin' => 'Thin'
);

$attributes1 = array(
    'legend' => false
);

echo $this->Form->radio('crust', $options1, $attributes1);

 echo $this->Form->label('Select pizza size');
    
	$options = array(
	'small'=>'Small',
    'medium'=>'Medium',
	'large'=>'Large',
	'xlarge'=>'XLarge'
);

$attributes = array(
    'legend' => false
);

echo $this->Form->radio('size', $options, $attributes);
 
      $options2 = array(
	                 
				'spinach' => 'Spinach',
				'fetacheese' => 'Feta Cheese',
				'salami' => 'Salami',
				'bacon' => 'Bacon',
				'pepporoni' => 'Pepporoni',
				'blackolives' => 'Black Olives',
                'smokedham' => 'Smoked Ham',
				 'mushroom' => 'Mushroom',
				'greenolives' => 'Green Olives',
                'groundbeef' => 'Ground Beef'
);

	  echo $this->Form->input('topping',array(
        'label' => __('Select toppings',true),
        'type' => 'select',
        'multiple' => 'checkbox',
        'options' => $options2,
    ));
	
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

