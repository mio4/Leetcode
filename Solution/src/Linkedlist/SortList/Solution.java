package Linkedlist.SortList;


class ListNode {
      int val;
      ListNode next;
      ListNode(int x) {
          val = x;
          next = null;
      }
}
public class Solution {
	public static ListNode sortList(ListNode head) {
		if(head == null || head.next == null)
			return head;
		ListNode prev = null;
		ListNode slow = head;
		ListNode fast = head;
		while(fast != null && fast.next != null){
			prev = slow;
			slow = slow.next; //一次走一步
			fast = fast.next.next; //一次走两步
		}
		prev.next = null;

		//对两个部分分别排序
		ListNode l1 = sortList(head);
		ListNode l2 = sortList(slow);
		//合并
		return merge(l1,l2);
	}

	public static ListNode merge(ListNode l1, ListNode l2){
		ListNode l = new ListNode(0); //link node
		while(l1 != null && l2 != null){
			if(l1.val < l2.val){
				l.next = l1;
				l1 = l1.next;
			} else{
				l.next = l2;
				l2 = l2.next;
			}
			l = l.next;
		}

		/*while(l1 != null){
			l.next = l1;
			l1 = l1.next;
		}
		while(l2 != null){
			l.next = l2;
			l2 = l2.next;
		}*/
		if(l1 != null)
			l.next = l1;
		if(l2 != null)
			l.next = l2;

		//return l.next;
		return l;
	}


	public static void main(String[] args){
		ListNode node1 = new ListNode(-1);
		ListNode node2 = new ListNode(5);
		ListNode node3 = new ListNode(3);
		ListNode node4 = new ListNode(4);
		ListNode node5 = new ListNode(0);
		node1.next = node2;
		node2.next = node3;
		node3.next = node4;
		node4.next = node5;
		ListNode nodeF = sortList(node1);
		while(nodeF != null){
			System.out.println(nodeF.val);
			nodeF = nodeF.next;
		}
	}
}