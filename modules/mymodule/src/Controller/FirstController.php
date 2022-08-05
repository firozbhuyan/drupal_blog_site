class FirstController extends ControllerBase {
  public function content() {
 
    return [
      '#theme' => 'my_template',
      '#test_var' => $this->t('Test Value'),
    ];
 
  }
}