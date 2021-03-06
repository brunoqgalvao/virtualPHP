<!-- Modal -->
<?php foreach($produtos as $produto): ?>
  <div class="modal fade" id="<?= $produto['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="<?= $produto['id'] ?>Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="<?= $produto['id'] ?>Label"><?= $produto['nome'] ?></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class='row mb-3'>
            <div class='col-md-12'>
            <img src=<?= $produto['img_path'] ?> class="card-img-top" style="height:10rem;" alt="...">
            </div>
          </div>
          <div class='row'>
            <div class='col-sm-12'>
              <form method="POST" action="sucesso.php" id="i<?=$produto['id'] ?>">
                <div class="form-group">
                  <input type="text" name="nomeCliente" id="nomeCliente" placeholder="Nome Completo">
                </div>
                <div class="form-group">
                  <input type="number" name="cpfCliente" id="cpfCliente" placeholder='CPF'>
                  <small id="cpfHelp" class="form-text text-muted">Somente números</small>
                </div>
                <div class="form-group">
                  <input type="number" name="cartaoCliente" id="cartaoCliente" placeholder='Cartao de crédito'>
                </div>
                <div class="form-group">
                  <input type="date" name="dataValidadeCartao" id="dataValidadeCartao" placeholder='Data de Validade do Cartão'>
                </div> 
                <div class="form-group">
                  <input type="number" name="cvvCartao" id="cvvCartao" maxlength="3" placeholder='Data de Validade do Cartão'>
                </div>      
                <input type="text" name="nomeProduto" value="<?php $produto['nome'] ?>" hidden />
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <div class="text-primary">Preço Total: R$ <?= $produto['preco'] ?></div>
            <button type="submit" class="btn btn-success" form="i<?=$produto['id'] ?>">Finalizar Compra</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <?php endforeach ?>
