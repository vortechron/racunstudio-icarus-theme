<?php 

namespace RacunStudioIcarus;

class CustomMeta
{
    protected $type;
    protected $field = 'text';
    protected $heading = 'Custom Fields';
    protected $label = 'Custom';
    protected $name = 'custom';

    public function __construct($type, $heading = null)
    {
        $this->type = $type;

        if ($heading) $this->heading = $heading;
    }

    public function field($field, $label, $name)
    {
        $this->label = $label;
        $this->field = $field;
        $this->name = $name;

        return $this;
    }

    public function heading($heading)
    {
        $this->heading = $heading;

        return $this;
    }

    public function start()
    {
        add_action('admin_init', [$this, 'addMetaBox']);
        add_action('save_post_'.$this->type, [$this, 'update']);
    }

    public function addMetaBox()
    {
        add_meta_box(
            "post_metadata_". $this->type . random_int(1, 23123), // div id containing rendered fields
            $this->heading, // section heading displayed as text
            [$this, 'render'], // callback function to render fields
            [$this->type], // name of post type on which to render fields
            "side", // location on the screen
            "low" // placement priority
        );
    }

    public function render()
    {
        global $post;

        $custom = get_post_custom($post->ID);

        $value = isset($custom[$this->name]) ? $custom[$this->name][0] : '';

        Helper::view('fields/'. $this->field .'.php', [
            'label' => $this->label,
            'name' => $this->name,
            'value' => $value
        ]);
    }

    public function update()
    {
        global $post;

        update_post_meta($post->ID, $this->name, sanitize_text_field($_POST[$this->name]));
    }
}