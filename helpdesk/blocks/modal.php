<!-- Modal -->
        <div class="modal fade" id="admin" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Вход как администратор</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <div id="message"></div>
            <form method="post" action="login.php">
                <div class="form-group">
                  <label>Login:</label>
                  <input type="text" name="" class="form-control" id="login" placeholder="input login">
                </div>
                <div class="form-group">
                  <label>Password:</label>
                  <input type="password" name="" class="form-control" id="password" placeholder="input password">
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Отмена</button>
                <button type="button" class="btn btn-success" id="myBtn" onclick="log();">Вход</button>
              </div>
            </form>
            </div>
          </div>
        </div>