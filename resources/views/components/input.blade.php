<?php
if($type == "select"){
    ?>
<select class="input-field" name="{{ $name }}">
    <option value="" disabled selected>{{ $placeholder }}</option>
    @foreach ($options as $option)
        <option value="{{ $option }}">{{ $option }}</option>
    @endforeach
</select>
<?php
} else {
?>
<input class="input-field" name="{{ $name }}" type="{{ $type }}" placeholder="{{ $placeholder }}" />
<?php
}
?>
