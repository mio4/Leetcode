```java
class Solution {
    public ListNode removeDuplicateNodes(ListNode head) {
        //1. 边界情况
        if(head == null || head.next == null){
            return head;
        }
        
        //2. 哈希表存储是否出现
        Map<Integer, Integer> map = new HashMap<>();
        map.put(head.val,1);
        ListNode cur = head, next = head.next;
        while(next != null){
            if(!map.containsKey(next.val)){
                map.put(next.val,1);
                cur.next = next;
                cur = next;
                next = next.next;
            } else{
                next = next.next;
            }
        }
        cur.next = null;
        return head;
    }
}
```

① 使用额外空间存储数据

































