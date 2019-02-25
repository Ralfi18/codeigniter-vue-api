<div class="add-new-test">
  <h1>  <?php echo $title ? $title : 'No title' ; ?></h1>
  <div class="">
    <?php echo validation_errors(); ?>
  </div>
  <?php if($this->session->flashdata('msg')): ?>
    <div class="">
      <?php echo $this->session->flashdata('msg'); ?>
    </div>
  <?php endif; ?>
  <?php echo form_open('/home/addTest'); ?>
    <label for="title">Title: </label>
    <input type="input" name="title" placeholder="Please enter test title." />
    <br />
    <label for="title-1">Title: </label>
    <input type="input" name="title-1" placeholder="Please enter test title." />
    <br />
    <input type="submit" name="submit" value="Add" />
  </form>
</div>
