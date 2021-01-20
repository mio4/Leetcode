```java
class Solution {
    public boolean buddyStrings(String A, String B) {
        if(A.equals(B)){
            Map<Character, Integer> map = new HashMap<>();
            for(char c : A.toCharArray()){
                map.put(c,map.getOrDefault(c,0)+1);
                if(map.get(c) >= 2){
                    return true;
                }
            }
            return false;
        } else {
            if(A.length() != B.length()){
                return false;
            }
            int count = 0;
            List<Character> listA = new ArrayList<>();
            List<Character> listB = new ArrayList<>();
            for(int i=0; i < A.length(); i++){
                if(A.charAt(i) != B.charAt(i)){
                    listA.add(A.charAt(i));
                    listB.add(B.charAt(i));
                    count++;
                }
                if(count > 2){
                    return false;
                }
            }
            if(count == 1){
                return false;
            }
            if(listA.get(0) == listB.get(1) && listA.get(1) == listB.get(0)){
                return true;
            }
            return false;
        }
    }
}
```

1、直接枚举字符串相等和不相等的情况

2、注意测试各种case



























































