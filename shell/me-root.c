#include <stdio.h>
#include <unistd.h>
main()
{
	setuid(0);
	setgid(0);
	printf("Congratulations you are root!");
}