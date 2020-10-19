################################################################################
#
# python-mpio
#
################################################################################

PYTHON_MPIO_VERSION = 1.0
PYTHON_MPIO_SOURCE = mpio-$(PYTHON_MPIO_VERSION).tar.gz
PYTHON_MPIO_SITE = https://files.pythonhosted.org/packages/e8/a4/8807898c3ae62745270efca1d83b4b89cbb41db1008d69ce498b26ba76aa
PYTHON_MPIO_SETUP_TYPE = setuptools
PYTHON_MPIO_LICENSE = Apache-2.0
PYTHON_MPIO_LICENSE_FILES = LICENSE

$(eval $(python-package))
