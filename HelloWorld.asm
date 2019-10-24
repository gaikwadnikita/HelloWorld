INCLUDE Irvine32.inc

.data
msg BYTE "Hello World!",0

.code
main PROC
   PUSHAD
   PUSHFD
   
   MOV EDX, OFFSET msg
   CALL WriteString
   
   POPFD
   POPAD
main ENDP
END main
