```java
public class Solution {
    public ListNode getIntersectionNode(ListNode headA, ListNode headB) {
        ListNode result = null;
        ListNode tempA = headA;
        while(tempA != null){
            ListNode tempB = headB;
            while(tempB != null){
                if(tempA == tempB){
                    return tempA;
                }
                tempB = tempB.next;
            }
            tempA = tempA.next;
        }
        return result;
    }
}
```

time：O(n^2)

space：O(1)

无脑双重for循环





```java
public class Solution {
    public ListNode getIntersectionNode(ListNode headA, ListNode headB) {
        ListNode A = headA;
        ListNode B = headB;
        while(A != B){
            A = (A != null) ? A.next : headB;
            B = (B != null) ? B.next : headA;
        }
        return A;
    }
}
```

① 链表A总长度a，链表B总长度b，链表A到交点的距离c，链表B到交点的距离d

② a-c = b-d 因为交点之后的长度一定相等，所以`a+d = b+c`

③ 双指针同时走，走到相同节点的时候，就是交点

































































