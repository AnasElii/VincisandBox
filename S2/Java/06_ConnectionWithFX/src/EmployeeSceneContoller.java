
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.scene.control.ChoiceBox;
import javafx.scene.control.TextField;
import javafx.scene.input.MouseEvent;

public class EmployeeSceneContoller {

    @FXML
    private ChoiceBox<String> cbService;

    @FXML
    private TextField tfAdresse;

    @FXML
    private TextField tfNaissance;

    @FXML
    private TextField tfNom;

    @FXML
    private TextField tfPrenom;

    @FXML
    private TextField tfSalaire;

    @FXML
    private TextField tfTel;

    @FXML
    void onAddClicked(ActionEvent event) {
        if (cbService.getValue() == null) {
            cbService.setValue("null");
        }
        GestionEmployee gp = new GestionEmployee();
        gp.addEmployee(tfNom.getText(), tfPrenom.getText(), tfAdresse.getText(),
                tfNaissance.getText(), tfTel.getText(),
                tfSalaire.getText(), cbService.getValue());
    }

    @FXML
    void onCloseClicked(ActionEvent event) {
        System.out.println("Exit Application");
        System.exit(0);
    }

    @FXML
    void onServiceSelected(MouseEvent event) {
        System.out.println("Service Selected");
    }

}