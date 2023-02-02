import java.util.HashMap;

public class TestCollections {
    public static void CallMap() {

        HashMap<Integer, String> map = new HashMap<>();
        map.put(2, "Hello World!");
        map.put(4, "Hello World 4!");
        map.put(5, "Hello World 5!");

        for (String message : map.values()) {
            System.out.println(message);
        }

        System.out.println("-----------------");
        map.remove(5);

        for (String message : map.values()) {
            System.out.println(message);
        }
    }

}
